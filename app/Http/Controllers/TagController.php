<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Header;
use App\Titre;
use App\Article;
use App\Tag;
use App\Quote;
use App\Footer;
use App\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster')->except('show');
    }
   
    public function index()
    {
        $tags=Tag::all();
        return view('backoffice.tags.tagsIndex', compact('tags'));
    }

    
    public function create()
    {
        return view('backoffice.tags.addTag');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tag' =>'required'
        ]);
        $tags=new Tag();
        $tags->tag=$request->tag;
        $tags->save();
        return redirect()->route('tags');
    }

    
    public function show($id)
    {
        $tag=Tag::find($id);
        $articles=$tag->articles()->where('valide', true)->paginate(3);
        $header = Header::first();
        $titres=Titre::first();
        $categories=Categorie::inRandomOrder()->take(6)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $quote=Quote::first();
        $footer=Footer::first();
        return view('pageBlog', compact('header', 'titres', 'footer', 'articles', 'categories', 'tags', 'quote'));
    }

    
    public function edit($id)
    {
        $tags=Tag::find($id);
        return view('backoffice.tags.editTag', compact('tags'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tag' =>'required'
        ]);
        $tags=Tag::find($id);
        $tags->tag=$request->tag;
        $tags->save();
        return redirect()->route('tags');
    }

    
    public function destroy($id)
    {
        $tags=Tag::find($id);
        $tags->delete();
        return redirect()->route('tags');
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Header;
use App\Titre;
use App\Article;
use App\Tag;
use App\Quote;
use App\Footer;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function __construct(){
        $this->middleware('AdminWebmaster');
    }
    
    public function index()
    {
        $categories=Categorie::all();
        return view('backoffice.categories.categoriesIndex', compact('categories'));
    }

    
    public function create()
    {
        return view('backoffice.categories.addCategorie');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categorie' =>'required'
        ]);
        $categories=new Categorie();
        $categories->categorie=$request->categorie;
        $categories->save();
        return redirect()->route('categories');
    }

    public function edit($id){
        $categories=Categorie::find($id);
        return view('backoffice.categories.editCategorie', compact('categories'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'categorie' =>'required'
        ]);
        $categories=Categorie::find($id);
        $categories->categorie=$request->categorie;
        $categories->save();
        return redirect()->route('categories');
    }

    public function show($id){
        $articles=Article::where('categorie_id', $id)->where('valide', true)->paginate(3);
        $header = Header::first();
        $titres=Titre::first();
        $categories=Categorie::inRandomOrder()->take(6)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $quote=Quote::first();
        $footer=Footer::first();
        return view('pageBlog', compact('header', 'titres', 'footer', 'articles', 'categories', 'tags', 'quote'));
    }

    
    public function destroy($id)
    {
        $categories=Categorie::find($id);
        $categories->delete();
        return redirect()->route('categories');
    }
}

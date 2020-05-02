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
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('addArticle')->only('index', 'create', 'store');
        $this->middleware('webmaster')->only('valide');
        $this->middleware('editdeleteArticle')->only('edit', 'update', 'destroy');
    }
    
    public function index()
    {
        $articles=Article::all();
        return view('backoffice.articles.articlesIndex', compact('articles'));
    }

    
    public function create()
    {
        
        $categories=Categorie::all();
        $tags=Tag::all();
        return view('backoffice.articles.addArticle', compact('categories', 'tags'));
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'img' =>'required|image',
            'title'=>'required|string',
            'text'=>'required|string',
            'categorie'=>'required|integer',
        ]);
        $articles=new Article();
        $newImg=Storage::disk('public')->put('', $request->img);
        $articles->img=$newImg;
        $articles->title=$request->title;
        $articles->text=$request->text;
        $articles->valide=false;
        $articles->user_id=Auth::id();
        $articles->categorie_id=$request->categorie_id;
        $articles->save();
        foreach ($request->tag as $key) {
            $articles->tags()->attach($key);
        }
        return redirect()->route('articles');
    }

    
    public function show($id)
    {
        $article=Article::find($id);
        $header = Header::first();
        $titres=Titre::first();
        $categories=Categorie::inRandomOrder()->take(6)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $footer=Footer::first();
        $quote=Quote::first();
        $comments=Commentaire::where('article_id', $id)->paginate(9);
        return view('partials.blog.pageComment', compact('header', 'titres', 'footer', 'article', 'categories', 'tags', 'comments', 'quote'));
    }

    
    public function edit($id)
    {
        $articles=Article::find($id);
        
        $categories=Categorie::all();
        $tags=Tag::all();
        return view('backoffice.articles.editArticle', compact('articles', 'categories', 'tags'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'img' =>'sometimes|image',
            'title'=>'required|string',
            'text'=>'required|string',
            'categorie'=>'required|integer',
        ]);
        $articles=Article::find($id);
        if($request->hasFile('img')){
            Storage::disk('public')->delete($articles->img);
            $newImg=Storage::disk('public')->put('', $request->img);
            $articles->img=$newImg;
        }
        $articles->title=$request->title;
        $articles->text=$request->text;
        $articles->user_id=Auth::id();
        $articles->categorie_id=$request->categorie_id;
        $articles->save();
        foreach ($request->tag as $key) {
            $articles->tags()->attach($key);
        }
        return redirect()->route('articles');
    }

    
    public function destroy($id)
    {
        $articles=Article::find($id);
        Storage::disk('public')->delete($articles->img);
        $articles->delete();
        return redirect()->route('articles');
    }

    public function search(Request $request){
        $articles=Article::where('title', 'LIKE', '%'.$request->search.'%')->where('valide', true)->paginate(3);
        $header = Header::first();
        $titres=Titre::first();
        $quote=Quote::first();
        $categories=Categorie::inRandomOrder()->take(6)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $footer=Footer::first();
        return view('pageBlog', compact('header', 'titres', 'footer', 'articles', 'categories', 'tags', 'quote'));
    }

    public function valide($id){
        $articles=Article::find($id);
        $articles->valide=true;
        $articles->save();
        return redirect()->back();
    }
}

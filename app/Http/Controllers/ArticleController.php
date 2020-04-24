<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    
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
        $articles=new Article();
        $newImg=Storage::disk('public')->put('', $request->img);
        $articles->img=$newImg;
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

    
    public function show($id)
    {
        
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Titre;
use App\Article;
use App\Categorie;
use App\Tag;
use App\Footer;



class PageBlog extends Controller
{
    public function index(){
        $header = Header::first();
        $titres=Titre::first();
        $articles=Article::latest()->paginate('3');
        $categories=Categorie::inRandomOrder()->take(6)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $footer=Footer::first();
        return view('pageBlog', compact('header', 'titres', 'footer', 'articles', 'categories', 'tags'));
    }
}

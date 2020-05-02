<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Titre;
use App\Article;
use App\Categorie;
use App\Tag;
use App\Footer;
use App\Quote;



class PageBlog extends Controller
{
    public function index(){
        $header = Header::first();
        $titres=Titre::first();
        $articles=Article::latest()->where('valide', true)->paginate('3');
        $categories=Categorie::inRandomOrder()->take(6)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $quote=Quote::first();
        $footer=Footer::first();
        return view('pageBlog', compact('header', 'titres', 'footer', 'articles', 'categories', 'tags', 'quote'));
    }
}

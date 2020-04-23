<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Titre;
use App\Footer;


class PageBlog extends Controller
{
    public function index(){
        $header = Header::first();
        $titres=Titre::first();
        $footer=Footer::first();
        return view('pageBlog', compact('header', 'titres', 'footer'));
    }
}

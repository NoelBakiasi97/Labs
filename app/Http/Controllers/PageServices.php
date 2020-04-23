<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Titre;
use App\Service;
use App\Contact;
use App\Article;
use App\Newsletter;
use App\Footer;

class PageServices extends Controller
{
    public function index(){
        $header = Header::first();
        $titres=Titre::first();
        $services=Service::latest('id')->paginate(9);
        $services2=Service::latest('id')->take(6)->get();
        $contact=Contact::first();
        $articles=Article::latest('id')->take(3)->get();
        $footer=Footer::first();
        return view('pageServices', compact('header', 'services', 'footer', 'contact', 'titres', 'services2', 'articles'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Titre;
use App\Contact;
use App\Footer;

class PageContact extends Controller
{
    public function index(){
        $header = Header::first();
        $titres=Titre::first();
        $contact=Contact::first();
        $footer=Footer::first();
        return view('pageContact', compact('header', 'titres' ,'contact', 'footer'));
    }
}

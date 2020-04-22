<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Header;
use App\Carousel;

class WelcomeController extends Controller
{
    public function index(){
        $services=Service::latest('id')->paginate(9);
        $header = Header::first();
        $carousel = Carousel::all();
        return view('welcome', compact('services', 'header', 'carousel'));
    }
}

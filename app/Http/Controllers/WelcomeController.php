<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Header;
use App\Carousel;
use App\About;
use App\Testimonial;
use App\Standout;
use App\Titre;
use App\Contact;
use App\Footer;


class WelcomeController extends Controller
{
    public function index(){
        $services=Service::latest('id')->paginate(9);
        $header = Header::first();
        $carousel = Carousel::all();
        $about = About::first();
        $testimonials = Testimonial::latest('id')->take(6)->get();
        $standout=Standout::first();
        $titres=Titre::first();
        $contact=Contact::first();
        $ceo=User::where('role_id', '=', '2')->first();
        $users=User::inRandomOrder('')->where('role_id', '!=', '2')->where('role_id', '!=', '1')->take(2)->get();
        $footer=Footer::first();
        return view('welcome', compact('services', 'header', 'carousel', 'about', 'testimonials', 'standout', 'titres', 'users', 'ceo', 'contact', 'footer'));
    }
}

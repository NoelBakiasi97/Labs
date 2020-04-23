<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;

class NewsletterController extends Controller
{
    public function index(){
        $newsletter=Newsletter::all();
        return view('backoffice.newsletterIndex', compact('newsletter'));
    }

    public function store(Request $request){
        $newsletter=new Newsletter();
        $newsletter->email=$request->email;
        $newsletter->save();

        $email=$request->email;

        Mail::to($email)->send(new NewsletterMail($email));
        return redirect()->to(app('url')->previous() . '#newsletter')->with('newsletter2', 'sent');
    }
}

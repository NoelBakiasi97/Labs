<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    
    public function __construct(){
        $this->middleware('AdminWebmaster');
    }

    public function index()
    {
        $contact=Contact::first();
        return view('backoffice.contact.contactIndex', compact('contact'));
    }

    
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('backoffice.contact.editContact', compact('contact'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' =>'required',
            'adress'=>'required',
            'number'=>'required|integer|digits_between:10,15',
            'email'=>'required|email',
        ]);
        $contact = Contact::find($id);
        $contact->text=$request->text;
        $contact->adress=$request->adress;
        $contact->number=$request->number;
        $contact->email=$request->email;
        $contact->save();
        return redirect()->route('contact');
    }

    
}

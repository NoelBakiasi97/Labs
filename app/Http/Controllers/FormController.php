<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Form;
use App\Mail\MailContact;

class FormController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster');
        $this->middleware('auth')->only('store');
    }

    public function index(){
        $form = Form::all();
        return view('backoffice.mailsIndex', compact('form'));
    }


    public function store(Request $request){

        $form = new Form();
        $form->name=$request->name;
        $form->email=$request->email;
        $form->subject=$request->subject;
        $form->mssg=$request->mssg;
        $form->save();

        $name=$request->name;
        $email=$request->email;
        $subject=$request->subject;
        $mssg=$request->mssg;

        Mail::to('admin@labs.com')->send(new MailContact($name, $email, $subject, $mssg));
        return redirect()->to(app('url')->previous() . '#con_form')->with('newsletter', 'sent');
    }
}

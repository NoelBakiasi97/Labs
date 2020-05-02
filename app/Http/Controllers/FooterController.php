<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster');
    }
    
    public function index()
    {
        $footer=Footer::first();
        return view('backoffice.footer.footerIndex', compact('footer'));
    }

 
    public function edit($id)
    {
        $footer=Footer::find($id);
        return view('backoffice.footer.editFooter', compact('footer'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' =>'required',
            'link'=>'required'
        ]);
        $footer=Footer::find($id);
        $footer->text=$request->text;
        $footer->position=$request->has('position');
        $footer->link=$request->link;
        $footer->save();
        return redirect()->route('footer');
    }

}

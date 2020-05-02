<?php

namespace App\Http\Controllers;

use App\Standout;
use Illuminate\Http\Request;

class StandoutController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster');
    }
    
    public function index()
    {
        $standout = Standout::first();
        return view('backoffice.standout.standoutIndex',  compact('standout'));
    }


    public function edit($id)
    {
        $standout = Standout::find($id);
        return view('backoffice.standout.editStandout',  compact('standout'));
    }

   
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' =>'required',
        ]);
        $standout = Standout::find($id);
        $standout->text=$request->text;
        $standout->save();
        return redirect()->route('standout');
    }

    
}

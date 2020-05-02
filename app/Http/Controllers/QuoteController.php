<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster');
    }
    
    public function index()
    {
        $quote=Quote::first();
        return view('backoffice.quote.quoteIndex', compact('quote'));
    }

    
    public function edit($id)
    {
        $quote=Quote::find($id);
        return view('backoffice.quote.editQuote', compact('quote'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' =>'required',
        ]);
        $quote=Quote::find($id);
        $quote->text=$request->text;
        $quote->save();
        return redirect()->route('quote');
    }
    
}

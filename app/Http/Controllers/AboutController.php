<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    
    public function index()
    {
        $about = About::all();
        return view('backoffice.about.aboutIndex', compact('about'));
    }


   
    public function edit($id)
    {
        $about = About::find($id);
        return view('backoffice.about.editAbout', compact('about'));
    }

  
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'=>'required',
            'para1'=>'required',
            'para2'=>'required',
            'img' =>'sometimes|image',
            'url'=>'required'
        ]);
        $about = About::find($id);
        $about->title=$request->title;
        $about->para1=$request->para1;
        $about->para2=$request->para2;
        $about->btn=$request->has('btn');
        if($request->hasFile('img')){
            Storage::disk('public')->delete($about->img);
            $newImg=Storage::disk('public')->put('', $request->img);
            $about->img=$newImg;
        }
        $about->url=$request->url;
        $about->save();
        return redirect()->route('about');
    }

}
 
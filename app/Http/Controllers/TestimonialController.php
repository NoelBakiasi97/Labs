<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster');
    }
    
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backoffice.testimonials.testimonialsIndex', compact('testimonials'));
    }

   
    public function create()
    {
        return view('backoffice.testimonials.addTestimonial');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'testimonial' =>'required',
            'img'=>'required|image',
            'name'=>'required',
            'function'=>'required',
        ]);
        $testimonials = new Testimonial();
        $testimonials->testimonial=$request->testimonial;
        $newImg=Storage::disk('public')->put('', $request->img);
        $testimonials->img=$newImg;
        $testimonials->name=$request->name;
        $testimonials->function=$request->function;
        $testimonials->save();
        return redirect()->route('testimonials');
    }

    

    
    public function edit($id)
    {
        $testimonials = Testimonial::find($id);
        return view('backoffice.testimonials.editTestimonial', compact('testimonials'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'testimonial' =>'required',
            'img'=>'sometimes|required',
            'name'=>'required',
            'function'=>'required',
        ]);
        $testimonials = Testimonial::find($id);
        $testimonials->testimonial=$request->testimonial;
        if($request->hasFile('img')){
            Storage::disk('public')->delete($testimonials->img);
            $newImg=Storage::disk('public')->put('', $request->img);
            $testimonials->img=$newImg;
        }
        $testimonials->name=$request->name;
        $testimonials->function=$request->function;
        $testimonials->save();
        return redirect()->route('testimonials');
    }

 
    public function destroy($id)
    {
        $testimonials = Testimonial::find($id);
        Storage::disk('public')->delete($testimonials->img);
        $testimonials->delete();
        return redirect()->route('testimonials');
    }
}

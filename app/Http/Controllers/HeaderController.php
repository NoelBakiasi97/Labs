<?php

namespace App\Http\Controllers;

use App\Header;
use App\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header=Header::all();
        $carousel=Carousel::all();
        return view('backoffice.header.headerIndex', compact('header', 'carousel'));
    }

    
    public function create()
    {
        return view('backoffice.header.addCarousel');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'imgCar' =>'sometimes|image'
        ]);

        $carousel=new Carousel();
        $newImgCar=Storage::disk('public')->put('', $request->imgCar);
        $carousel->imgCar=$newImgCar;
        $carousel->save();
        return redirect()->route('header');
    }

   
  
    public function edit($id)
    {
        $carousel=Carousel::find($id);
        return view('backoffice.header.editCarousel', compact('carousel'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'imgCar' =>'sometimes|image'
        ]);

        $carousel=Carousel::find($id);
        if($request->hasFile('imgCar')){
            Storage::disk('public')->delete($carousel->imgCar);
            $newImgCar=Storage::disk('public')->put('', $request->imgCar);
            $carousel->imgCar=$newImgCar;
        }
        $carousel->save();
        return redirect()->route('header');
    }


    public function destroy($id)
    {
        $carousel=Carousel::find($id);
        Storage::disk('public')->delete($carousel->imgCar);
        $carousel->delete();
        return redirect()->route('header');
    }



    public function editHeader($id){
        $header=Header::find($id);
        return view('backoffice.header.editHeader', compact('header'));
    }

    public function updateHeader(Request $request, $id){
        $validatedData = $request->validate([
            'logo' =>'sometimes|image',
            'text'=>'required',
        ]);
        $header=Header::find($id);
        if($request->hasFile('logo')){
            Storage::disk('public')->delete($header->logo);
            $newLogo=Storage::disk('public')->put('', $request->logo);
            $header->logo=$newLogo;
        }
        $header->text=$request->text;

        $header->save();
        return redirect()->route('header');
    }
}

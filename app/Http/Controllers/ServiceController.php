<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct(){
        $this->middleware('AdminWebmaster');
    }
    
    public function index()
    {
        $services = Service::all();
        $services2 = Service::all();
        return view('backoffice.services.servicesIndex', compact('services', 'servicesHaut', 'services2'));
    }

    
    public function create()
    {
        $icone = [
            [
                'class' => 'flaticon-050-satellite',
            'code' => 'f131',
            ],
            [
                'class' => 'flaticon-049-projector',
            'code' => 'f130',
            ],
            [
                'class' => 'flaticon-048-abstract',
            'code' => 'f12f',
            ],
            [
                'class' => 'flaticon-050-satellite',
            'code' => 'f131',
            ],
            [
                'class' => 'flaticon-035-smartphone',
                'code' => "f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                'code' => "f123"
            ],
            [
                'class' => 'flaticon-037-idea',
                'code' => "f124"
            ],
            [
                'class' => 'flaticon-038-graphic-tool-1',
                'code' => "f125"
            ],
            [
                'class' => 'flaticon-039-vector',
                'code' => "f126"
            ],
            [
                'class' => 'flaticon-040-rgb',
                'code' => "f127"
            ],
            [
                'class' => 'flaticon-041-graphic-tool',
                'code' => "f128"
            ],
            [
                'class' => 'flaticon-042-typography',
                'code' => "f129"
            ],
            [
                'class' => 'flaticon-043-sketch',
                'code' => "f12a"
            ],
            [
                'class' => 'flaticon-044-paint-bucket',
                'code' => "f12b"
            ],
            [
                'class' => 'flaticon-045-video-player',
                'code' => "f12c"
            ],
            [
                'class' => 'flaticon-046-laptop',
                'code' => "f12d"
            ],
            [
                'class' => 'flaticon-047-artificial-intelligence',
                'code' => "f12e"
            ],
            
        ];
        return view('backoffice.services.addServices', compact('icone'));
    }

    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'icone'=>'required',
            'title' =>'required',
            'description'=>'required',
        ]);
        $services = new Service();
        $services->icone=$request->icone;
        $services->title=$request->title;
        $services->description=$request->description;
        $services->save();
        return redirect()->route('services');
    }

    
    
    public function edit($id)
    {
        $icone = [
            [
                'class' => 'flaticon-050-satellite',
            'code' => 'f131',
            ],
            [
                'class' => 'flaticon-049-projector',
            'code' => 'f130',
            ],
            [
                'class' => 'flaticon-048-abstract',
            'code' => 'f12f',
            ],
            [
                'class' => 'flaticon-011-compass',
            'code' => 'f10a',
            ],
            [
                'class' => 'flaticon-035-smartphone',
                'code' => "f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                'code' => "f123"
            ],
            [
                'class' => 'flaticon-037-idea',
                'code' => "f124"
            ],
            [
                'class' => 'flaticon-038-graphic-tool-1',
                'code' => "f125"
            ],
            [
                'class' => 'flaticon-039-vector',
                'code' => "f126"
            ],
            [
                'class' => 'flaticon-040-rgb',
                'code' => "f127"
            ],
            [
                'class' => 'flaticon-041-graphic-tool',
                'code' => "f128"
            ],
            [
                'class' => 'flaticon-042-typography',
                'code' => "f129"
            ],
            [
                'class' => 'flaticon-043-sketch',
                'code' => "f12a"
            ],
            [
                'class' => 'flaticon-044-paint-bucket',
                'code' => "f12b"
            ],
            [
                'class' => 'flaticon-045-video-player',
                'code' => "f12c"
            ],
            [
                'class' => 'flaticon-046-laptop',
                'code' => "f12d"
            ],
            [
                'class' => 'flaticon-047-artificial-intelligence',
                'code' => "f12e"
            ],
            [
                'class'=> 'flaticon-023-flask',
                'code' => "f116"
            ],
            
        ];
        $services = Service::find($id);
        return view('backoffice.services.editServices', compact('services', 'icone'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'icone'=>'required',
            'title' =>'required',
            'description'=>'required',
        ]);
        $services = Service::find($id);
        $services->icone=$request->icone;
        $services->title=$request->title;
        $services->description=$request->description;
        $services->save();
        return redirect()->route('services');
    }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('services');
    }
}

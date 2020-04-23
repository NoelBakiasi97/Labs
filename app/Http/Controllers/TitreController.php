<?php

namespace App\Http\Controllers;

use App\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
   
    public function index()
    {
        $titres=Titre::all();
        return view('backoffice.titres.titresIndex', compact('titres'));
    }

  
    public function edit($id)
    {
        $titres=Titre::find($id);
        return view('backoffice.titres.editTitres', compact('titres'));
    }

    
    public function update(Request $request, $id)
    {
        $titres=Titre::find($id);
        $titres->titreClients=$request->titreClients;
        $titres->titreServices=$request->titreServices;
        $titres->titreTeam=$request->titreTeam;
        $titres->titreStandout=$request->titreStandout;
        $titres->titreContact=$request->titreContact;
        $titres->save();
        return redirect()->route('titres');
    }


}

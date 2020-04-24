<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    
    public function index()
    {
        $categories=Categorie::all();
        return view('backoffice.categories.categoriesIndex', compact('categories'));
    }

    
    public function create()
    {
        return view('backoffice.categories.addCategorie');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categorie' =>'required'
        ]);
        $categories=new Categorie();
        $categories->categorie=$request->categorie;
        $categories->save();
        return redirect()->route('categories');
    }

    public function edit($id){
        $categories=Categorie::find($id);
        return view('backoffice.categories.editCategorie', compact('categories'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'categorie' =>'required'
        ]);
        $categories=Categorie::find($id);
        $categories->categorie=$request->categorie;
        $categories->save();
        return redirect()->route('categories');
    }


    
    public function destroy($id)
    {
        $categories=Categorie::find($id);
        $categories->delete();
        return redirect()->route('categories');
    }
}

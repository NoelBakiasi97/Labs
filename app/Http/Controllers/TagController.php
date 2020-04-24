<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   
    public function index()
    {
        $tags=Tag::all();
        return view('backoffice.tags.tagsIndex', compact('tags'));
    }

    
    public function create()
    {
        return view('backoffice.tags.addTag');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tag' =>'required'
        ]);
        $tags=new Tag();
        $tags->tag=$request->tag;
        $tags->save();
        return redirect()->route('tags');
    }

    
    public function show($id)
    {
        $tags=Tag::find($id);
    }

    
    public function edit($id)
    {
        $tags=Tag::find($id);
        return view('backoffice.tags.editTag', compact('tags'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tag' =>'required'
        ]);
        $tags=Tag::find($id);
        $tags->tag=$request->tag;
        $tags->save();
        return redirect()->route('tags');
    }

    
    public function destroy($id)
    {
        $tags=Tag::find($id);
        $tags->delete();
        return redirect()->route('tags');
    }

    public function search(){

    }
}

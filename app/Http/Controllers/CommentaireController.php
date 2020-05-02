<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    public function store(Request $request, $id)
    {
        $comments = new Commentaire();
        $comments->comment=$request->comment;
        $comments->user_id=Auth::id();
        $comments->article_id=$id;
        $comments->save();
        return redirect()->back();
    }

}

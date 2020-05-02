<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Article;

use Closure;

class editdeleteArticle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id=$request->route()->parameters()['id'];
        $article=Article::find($id);
        if(Auth::user()->role_id==3 || (Auth::user()->role_id==5 && $article->user_id==Auth::id())){
            return $next($request);
        }
        return redirect()->back();
    }
}

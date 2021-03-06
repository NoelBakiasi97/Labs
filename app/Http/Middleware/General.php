<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;


use Closure;

class General
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
        if(Auth::user()->role_id==1 || Auth::user()->role_id==2 || Auth::user()->role_id==3 || Auth::user()->role_id==5){
            return $next($request);
        }
        return redirect()->back();
    }

        
}

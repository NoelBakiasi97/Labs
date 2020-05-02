<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AdminWebmaster
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role_id==1 || Auth::user()->role_id==3){
            return $next($request);
        }
        return redirect()->back();
    }
}

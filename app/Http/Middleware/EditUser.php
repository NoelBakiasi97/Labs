<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class EditUser
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
        $user=User::find($id);
        if ($user->role_id>3) {
            return $next($request);
        }
        return redirect()->back();
    }
}

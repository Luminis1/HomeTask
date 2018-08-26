<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleUser
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
        if ((Auth::user()->role == 'user' || Auth::user()->role == 'admin') && Auth::user()->isActive == 1) {
            return $next($request);
        }else {
            return redirect('/logout');
        }
    }
}

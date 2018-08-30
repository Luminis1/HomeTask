<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
 * Мидлвеир для аккаунтов с ролью User
 * Доступы к созданию тритов
 */

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
        if ((!empty(Auth::user()->role) == 'user' || !empty(Auth::user()->role) == 'admin') && Auth::user()) {
            if(Auth::user()->isActive !== 1) {
                session(['veryfied' => 'You need to confirm your acaunt via link from your email']);
                return redirect('/logout')->with(session('veryfied'));
            }else{
                return $next($request);
            }
        }else{
            return redirect('/logout');
        }
    }
}

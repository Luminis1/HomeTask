<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/*
 * Мидлвеир для аккаунтов с ролью Admin
 * Доступы в админ часть и к созданию тритов
 */

class CheckRoleAdmin
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
        if (!empty(Auth::user()->role) && !empty(Auth::user()->role) == 'admin') {
            return $next($request);
        }else {
            return redirect('/login');
        }
    }
}

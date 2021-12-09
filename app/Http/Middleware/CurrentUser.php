<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class CurrentUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (Session::has('isLoggedIn')) {
            view()->share('role', Session::get('role'));  
            view()->share('user', Session::get('user'));  
        }

        return $next($request);
    }
}

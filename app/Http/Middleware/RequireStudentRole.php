<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class RequireStudentRole
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
            $role = Session::get('role');
            if (in_array($role, array('SINH_VIEN'))) {
                return $next($request);
            }
        }
        return redirect('/permission-denied');
    }
}

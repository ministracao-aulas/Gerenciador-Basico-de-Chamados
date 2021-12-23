<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class UserHasAnyRoleMiddleware
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
        if(!Auth::check())
        {
            if(\Route::currentRouteName() != 'login')
                return redirect()->route('login');

            return $next($request);
        }

        if(!Auth::user()->roles->count())
        {
            abort(403, __('User without role. Contact the administrator.'));
        }else{
            return $next($request);
        }

    }
}

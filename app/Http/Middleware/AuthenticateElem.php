<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AuthenticateElem
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if(Auth::check())
        //     return $next($request);
        // return redirect()->route('home');
        if(Auth::guard($guard)->guest())
        {

            if($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->route('elem.signin');
            }
        }
        return $next($request);

    }
}

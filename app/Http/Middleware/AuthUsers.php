<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use Illuminate\Support\Facades\Session;

class AuthUsers
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
        if (false == Auth::check()) {
            return redirect()->route('auth.login'); 
        }
        return $next($request);
    }
}



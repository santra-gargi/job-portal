<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAlreadyLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session()->has('loginId') && (url('userlog')==$request->url() || url('userreg')==$request->url() )) {
            return back();
        }
        return $next($request);
    }
}

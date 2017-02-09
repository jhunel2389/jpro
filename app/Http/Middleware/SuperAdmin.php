<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class SuperAdmin
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
        if ( Auth::check() && Auth::user()->isAdmin() == 3)
        {
            return $next($request);
        }
        return back()->with('fail','Your account are not allowed to proccess this request.');
    }
}

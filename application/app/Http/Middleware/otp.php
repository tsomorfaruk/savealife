<?php

namespace App\Http\Middleware;

use Closure;

class otp
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
        if (auth()->user()->otp == null) {
            return $next($request);
        }

        return redirect('/verification');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (hasRole('Administrator')) {

            return $next($request);

        } else {
            dd('fuckyou');
        }

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Post
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
        //        if(auth()->user()->owns($post)){
//
//        return $next($request);
//        }else{
//            dd('get the fuck off');
//        }
    }
}

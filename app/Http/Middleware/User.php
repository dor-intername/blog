<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
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
//        $role = '';
//        foreach($request->user()->privileges as $role){
//            $role = $role->name;
//        };
        if($request->user()->hasRole('Administrator')){
        dd('greatfor u');
            return $next($request);

        }else{
            dd('fuckyou');
    }
//        }else{
//            dd('get the fuck off');
//        }
    }
}

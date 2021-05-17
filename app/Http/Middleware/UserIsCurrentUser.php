<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserIsCurrentUser
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
    dd(\App\Models\Post::where('id',$request)->first());

        $post = \App\Models\Post::find($request->user()->id)->get();
        if ($request->user()->id === $user->id) {

            return $next($request);

        } else {
            dd('fuckyou');
        }

    }
}

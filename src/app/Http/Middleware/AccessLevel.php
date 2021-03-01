<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $minLevel)
    {
        $userLevel = Auth::user()->level;

        if($userLevel < $minLevel) {
            return redirect()->route('negado');
        }

        return $next($request);
    }
}

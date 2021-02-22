<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessLevel
{
    private $level = 0;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $minLevel)
    {
        if($this->level < $minLevel) {
            return redirect()->route('negado');
        }

        return $next($request);
    }
}

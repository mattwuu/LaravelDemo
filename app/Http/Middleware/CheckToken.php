<?php

namespace App\Http\Middleware;

use Closure;
use SebastianBergmann\Environment\Console;

class CheckToken
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
        dump('Call in CheckToken middleware');
        return $next($request);
    }
}

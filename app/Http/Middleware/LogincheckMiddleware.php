<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Request;

class LogincheckMiddleware
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
        echo "in midlleware";
        $test = Request::input('session_id');
        echo $test;
        $res = $next($request);
        return $res;
    }
}

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
        $test = Session::all();
        print_r($test);
        $res = $next($request);
        return $res;
    }
}

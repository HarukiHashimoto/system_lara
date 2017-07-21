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

        $res = $next($request);
        // echo "in midlleware";
        // $test = Session::all();
        // print_r($test);
        // echo '<br />';
        // return redirect('create');
        return $res;
    }
}

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
        echo "in midlleware";
        echo '<br />';
        if (Session::has('learnerid')) {
            return $res;
        } else {
            return view('login', compact('res'));
        }
    }
}

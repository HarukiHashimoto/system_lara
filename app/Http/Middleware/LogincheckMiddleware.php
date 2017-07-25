<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Request;
use Response;
use Cookie;

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
        // $test = Session::all();
        // print_r($test);
        $cookie_id = Cookie::get('cookie_id', 'NULL'); //セッションが開始されていなければ0000がセットされる
        echo $cookie_id;
        if ($cookie_id == 'NULL') {
            $title = 'Login Page';
            return Response::make(view('login', compact('title')));
        } else {
            // $cookie_id = Cookiejar::all();
            // print_r($cookie_id);
            // echo '1';
            $cookie_id = Cookie::get('cookie_id', 'NULL');
            $cookie = Cookie::make('cookie_id', $cookie_id, 60*24*3);
            Cookie::queue($cookie);
            $request->merge(['cookie_id'=>$cookie_id]);
            return $res;
        }
    }
}

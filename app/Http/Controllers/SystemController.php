<?php

namespace App\Http\Controllers;

// メソッドの読み込み
use Request;
use DB;
use Session;
use Redirect;
use Input;
use Hash;
use Cookie;


class SystemController extends Controller
{
    public function __construct() {
    // fooActionとbarAction以外に適用する
    $this->middleware('loginCheck', ['except' => 'systemGet']);
    }

    public function systemGet() {
        $title = 'System Page';
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        echo $cookie_id;

        return view('system', compact('title', 'cookie_id'));
    }
}

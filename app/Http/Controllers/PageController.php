<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class PageController extends Controller
{
    public function sampleGet($title = 'Sample Page') {
        $title = 'Sample Page';
        $learner = DB::select("select name from learner");

        return view('sample', compact('title', 'learner'));
    }

    public function samplePost($title = 'Sample Page') {
        $title = 'Sample Page';
        $learner = DB::select("select name from learner");

        return view('sample', compact('title', 'learner'));
    }

    public function loginGet($title = 'Login Page') {
        $title = 'Login Page';
        $learner = DB::select("select name from learner");

        return view('login', compact('title', 'learner'));
    }

    public function createGet($title = 'Create Account Page') {
        $title = 'Create Account Page';
        $learner = DB::select("select name from learner");

        return view('createAccount', compact('title', 'learner'));
    }
}

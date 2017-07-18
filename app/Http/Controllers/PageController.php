<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function sample($title = 'Sample Page') {
        $title = 'Sample Page';
        $learner = DB::select("select name from learner");

        return view('sample', compact('title', 'learner'));
    }
}

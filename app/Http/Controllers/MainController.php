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
use Response;

// オブジェクトをJSON形式へ変換する（日本語をunicodeのままで整形して．）
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

class MainController extends Controller
{
    public function index() {
        $title = 'main page';
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        return view('system', compact('title', 'cookie_id'));
    }

    public function show($lm_id) {
        $title = 'main page';
        // $lm_id = Input::get('lm_id');
        // echo $lm_id;
        echo $lm_id;
        $data = DB::select("select material_text from learning_material where material_id = ?",[$lm_id]);
        $lm_text = $data[0]->material_text;
        $data = DB::select("select * from node where material_id = ? or material_id = ?", ['general', $lm_id]);
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        return view('main', compact('title', 'cookie_id', 'lm_text'));
    }
}

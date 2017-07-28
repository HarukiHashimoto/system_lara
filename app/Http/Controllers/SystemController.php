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

class SystemController extends Controller
{
    public function __construct() {
    // fooActionとbarAction以外に適用する
    // $this->middleware('loginCheck', ['except' => 'systemGet']);
    }

    public function systemGet() {
        $title = 'System Page';
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        return view('system', compact('title', 'cookie_id'));
    }

    public function exchange() {
        $lm_list = DB::select('select * from learning_material');
        for ($i=0; $i < count($lm_list); $i++) {
            $lm_title[$i] = $lm_list[$i]->title;
            $lm_text[$i] = $lm_list[$i]->material_text;
            $lm_id[$i] = $lm_list[$i]->material_id;
        }

        $lm_title = json_safe_encode($lm_title);
        $lm_id = json_safe_encode($lm_id);
        return response($lm_id);
    }
}


// 'lm_title', 'lm_text', 'lm_id'

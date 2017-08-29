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

    public function readAll() {
        $lm_list = DB::select('select * from learning_material');
        // for ($i=0; $i < count($lm_list); $i++) {
        //     $lm_title[$i] = $lm_list[$i]->title;
        //     $lm_text[$i] = $lm_list[$i]->material_text;
        //     $lm_id[$i] = $lm_list[$i]->material_id;
        // }

        // DBから取得したデータをJSONデータ化
        $lm_list = json_safe_encode($lm_list);

        return response($lm_list);
    }

    public function readAirticle() {
        $title = 'Read';
        echo $lm_id;
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        return view('system', compact('title', 'cookie_id'));
    }

    public function nodenlist($lr_id, $lm_id) {
        $node_list = DB::select('select * from node where material_id = ? or material_id = ?', [$lm_id, 'general']);
        $link_list = DB::select('select * from link where material_id = ? or learner_id = ?', [$lm_id, $lr_id]);
        $response = array();
        $response['node_list'] = $node_list;
        $response['link_list'] = $link_list;
        // $node_list = json_safe_encode($node_list);
        $response = json_safe_encode($response);
        return response($response);
    }

    public function sample() {
        $title = 'Sample';
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        return view('sample', compact('title', 'cookie_id'));
    }
}

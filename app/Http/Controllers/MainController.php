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

        // 学習コンテンツの選択画面の表示
        $title = 'main page';
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        if ($cookie_id == 'NULL') {
            return redirect('login');
        }
        return view('system', compact('title', 'cookie_id'));
    }

    public function show($lm_id) {
        $title = 'Main Page';

        // 選択されたテキストの取得
        $data = DB::select("select * from learning_material where material_id = ?",[$lm_id]);
        $lm_text = $data[0]->material_text;
        $lm_title = $data[0]->title;
        $lm_id = $data[0]->material_id;



        // テキスト内のノードの取得
        $node = DB::select("select * from node where material_id = ? or material_id = ?", ['general', $lm_id]);
        // $node = json_safe_encode($data);

        $lm_id = json_safe_encode($lm_id);
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        $lr_id = json_safe_encode($cookie_id);
        return view('main', compact('title', 'cookie_id', 'lm_text', 'lm_title', 'lm_id', 'lr_id', 'node'));
    }
}

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


class PageController extends Controller
{

    public function __construct() {
    // fooActionとbarAction以外に適用する
    $this->middleware('loginCheck', ['except' => ['sampleGet', 'createGet', 'createPost', 'loginGet', 'loginPost', 'logoutPost']]);
    }

    public function sampleGet() {
        $title = 'Sample Page';
        $cookie_id = Cookie::get('cookie_id');

        return view('sample', compact('title', 'cookie_id'));
    }

    public function samplePost() {
        $title = 'Sample Page';;

        return view('sample', compact('title'));
    }

    public function loginGet() {
        $title = 'Login Page';
        $cookie_id = Cookie::get('cookie_id', 'NULL');

        return view('login', compact('cookie_id', 'title'));
    }

    public function loginPost() {
        $title = 'Login Page';
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        $learnerid = Request::input('learnerid');
        $password = Request::input('password');
        $data = DB::select("select * from learner where learner_id = ?",[$learnerid]);
        $count_data = count($data);



        if ($count_data == 1) {
            if (Hash::check($password, $data[0]->password)) {
                Session::put('learnerid', $learnerid);
                $session_id = Session::get('learnerid');
                $cookie = Cookie::make('cookie_id', $session_id, 60*24*3);
                Cookie::queue($cookie);
                $cookie_id = $session_id;


            } else {
                $message_pswDeny='Error:パスワードが一致しません．';
                return view('login', compact('title', 'message_pswDeny'));
            }
        } else {
            $message_notExist='Error:IDに該当するユーザが存在しません．';
            return view('login', compact('title', 'message_notExist'));
        }

        if (Session::has('userid')) {
            return view('');    // ログインしている場合
        } else {
            return view('login', compact('title', 'cookie_id'));
        }
    }


    public function createGet() {
        $title = 'Create Account Page';
        $learner = DB::select("select name from learner");
        $cookie_id = Cookie::get('cookie_id', 'NULL');

        return view('createAccount', compact('title', 'cookie_id'));
    }

    // アカウント作成画面からのPOSTを受け取ったとき
    public function createPost() {
        $title = 'Create Account Page';
        $learnername = Request::input('learnername');
        $learnerid = Request::input('learnerid');
        $password = Request::input('password');
        $data = DB::select('select * from learner where learner_id = ?',[$learnerid]);
        $count_data = count($data);
        $cookie_id = Cookie::get('cookie_id', 'NULL');
        if ($count_data == 0) {
            $pass_hashed = Hash::make($password);
            DB::insert('insert into learner (learner_id, password, name) values (?, ?, ?)',[$learnerid, $pass_hashed, $learnername]);
        } else {    // IDに重複があった場合，エラーメッセージ表示
            $message_dupl = "Error:このIDはお使いになれません．";
            return view('createAccount', compact('title', 'message_dupl', 'cookie_id'));
        }

        return view('createDone', compact('title', 'cookie_id'));
    }

    public function logoutPost() {
        $title = 'Logout';
        Cookie::queue(Cookie::forget('cookie_id'));
        Session::flush();
        $cookie_id = "NULL";

        return view('logoutDone', compact('title', 'cookie_id'));
    }
}

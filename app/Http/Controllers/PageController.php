<?php

namespace App\Http\Controllers;

// メソッドの読み込み
use Request;
use DB;
use Session;
use Redirect;
use Input;
use Hash;

class PageController extends Controller
{
    public function sampleGet() {
        $title = 'Sample Page';
        $learner = DB::select("select name from learner");

        return view('sample', compact('title', 'learner'));
    }

    public function samplePost() {
        $title = 'Sample Page';
        $learner = DB::select("select name from learner");

        return view('sample', compact('title', 'learner'));
    }

    public function loginGet() {
        $title = 'Login Page';
        $learner = DB::select("select name from learner");
        if (Session::has('userid')) {
            return view('');    // ログインしている場合
        } else {
            return view('login', compact('title', 'learner'));
        }
    }

    public function loginPost() {
        $title = 'Login Page';
        $learnerid = Request::input('learnerid');
        $password = Request::input('password');
        $data = DB::select("select * from learner where learner_id = ?",[$learnerid]);
        $count_data = count($data);
        if ($count_data == 1) {
            if (Hash::check($password, $data[0]->password)) {
                echo 'Hash Mach!';
            } else {
                $message_pswDeny='Error:パスワードが一致しません．';
                return view('login', compact('title', 'message_pswDeny'));
            }
        } else {
            $message_notExist='Error:IDに該当するユーザが存在しません．';
            return view('login', compact('title', 'message_notExist'));
        }
        $learner = DB::select("select * from learner");
        if (Session::has('userid')) {
            return view('');    // ログインしている場合
        } else {
            return view('login', compact('title', 'learner'));
        }
    }


    public function createGet() {
        $title = 'Create Account Page';
        $learner = DB::select("select name from learner");

        return view('createAccount', compact('title', 'learner'));
    }

    // アカウント作成画面からのPOSTを受け取ったとき
    public function createPost() {
        $title = 'Create Account Page';
        $learnername = Request::input('learnername');
        $learnerid = Request::input('learnerid');
        $password = Request::input('password');
        $data = DB::select('select * from learner where learner_id = ?',[$learnerid]);
        $count_data = count($data);
        if ($count_data == 0) {
            $pass_hashed = Hash::make($password);
            DB::insert('insert into learner (learner_id, password, name) values (?, ?, ?)',[$learnerid, $pass_hashed, $learnername]);
        } else {    // IDに重複があった場合，エラーメッセージ表示
            $message_dupl = "Error:このIDはお使いになれません．";
            return view('createAccount', compact('title', 'message_dupl'));
        }

        return view('createDone', compact('title', 'learner'));
    }
}

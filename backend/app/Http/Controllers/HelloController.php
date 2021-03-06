<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Bookモデルをインポート
use App\Models\Book;

class HelloController extends Controller
{
    // アクションメソッドを定義
    public function index()
    {
        // 戻り値
        return 'こんにちは、世界！';
    }

    public function view()
    {
        // 変数を準備
        $data = [
            'msg' => 'こんにちは、世界！'
        ];

        // テンプレートを呼び出す
        return view('hello.view', $data);
    }

    // アクションメソッドを定義
    public function list()
    {
        // booksテーブルから全行を取得する
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list', $data);
    }
}

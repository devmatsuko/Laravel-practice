<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Bookモデルをインポート
use App\Models\Book;

class ViewController extends Controller
{
    //HTMLエスケープ
    public function escape()
    {
        return view('view.escape',[
            'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
            <p>WINGSへようこそ</p>'
        ]);
    }

    // 基本ディレクティブ
    public function if()
    {
        return view('view.if',[
            'random' => random_int(0,100)
        ]);
    }

    // unless
    public function unless()
    {
        return view('view.unless',[
            'random' => random_int(0,100)
        ]);
    }

    // isset
    public function isset()
    {
        return view('view.isset',[
            'msg' => 'こんにちは、世界！'
        ]);
    }

    // テンプレート確認用
    public function master()
    {
        return view('view.master',[
            'msg' => 'こんにちは、世界！'
        ]);
    }

    // コンポーネント確認用
    public function comp()
    {
        return view('view.comp');
    }

    // アクションメソッドを定義
    public function list()
    {
        // booksテーブルから全行を取得する
        $data = [
            'records' => Book::all()
        ];
        return view('view.list', $data);
    }
}

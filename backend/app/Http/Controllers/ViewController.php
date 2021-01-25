<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
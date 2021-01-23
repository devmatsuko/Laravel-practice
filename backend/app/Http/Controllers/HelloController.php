<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // アクションメソッドを定義
    public function index()
    {
        // 戻り値
        return 'こんにちは、世界！';
    }
}

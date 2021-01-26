<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// helloアクションへのルーティング
Route::get('hello','HelloController@index');
// helloビューへのルーティング
Route::get('hello/view','HelloController@view');
// hello/listビューへのルーティング
Route::get('hello/list','HelloController@list');

// view/viewビューへのルーティング
Route::get('view/escape','ViewController@escape');
// view/ifビューへのルーティング
Route::get('view/if','ViewController@if');
// view/unlessビューへのルーティング
Route::get('view/unless','ViewController@unless');
// view/issetビューへのルーティング
Route::get('view/isset','ViewController@isset');
// view/masterビューへのルーティング
Route::get('view/master','ViewController@master');
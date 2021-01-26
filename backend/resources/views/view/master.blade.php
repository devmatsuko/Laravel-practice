<!-- 利用する共通レイアウトを宣言 -->
@extends('layouts.base')
<!-- タイトルセクションのコンテンツ -->
@section('title', '共通レイアウトの基本')
<!-- mainセクションのコンテンツ -->
@section('main')
  @parent
  <p>{{ $msg }}</p>
@endsection
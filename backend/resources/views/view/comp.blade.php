@extends('layouts.base')
@section('title','共通レイアウトの基本')
@section('main')
  <!-- 簡単な値を渡す -->
  @component('components.alert',['type' => 'success'])
    <!-- コンテンツを引き渡す -->
    @slot('alert_title')
      初めてのコンポーネント
    @endslot
    <!-- その他コンテンツを渡す -->
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
  @endcomponent
@endsection
@extends('layouts.kouka1_1')
@section('title', 'kouka')
@section('menu_title')
ユーザ情報確認画面
@endsection
@section('content')
<ol>
<p>入力の確認をお願い致します。</p>
{{--データを取り出す--}}
<p>名前 :{{$data['name']}}</p>
<p>住所:{{$data['age']}}</p>
<p>ログインID:{{$data['mail']}}</p>
<p>パスワード:{{$data['school']}}</p>
<p>入力にお間違えはないでしょうか。</p>
@endsection
@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
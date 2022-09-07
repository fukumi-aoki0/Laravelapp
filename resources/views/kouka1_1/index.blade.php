@extends('layouts.kouka1_1')
@section('title', 'kouka')
@section('menu_title')
    フレームワークについて
@endsection
    
@section('menu_content')


@component('components.menu')
@slot('menu_title')
他のアプリケーションとの比較と動向
@endslot

@slot('menu_content')
<p>バックエンドフレームワークにおいてPHPのLaravel,PytonのDjango,RudyのRudy on Railsが3大バックエンドフレームワークとみなされることもある。</p>
@endslot
@endcomponent
@endsection

@section('content')
@include('components.subview', ['subview_title'=>'Laravelの名前の由来',
'subview_content'=>'Laravelの名前は「ナルニア国物語」に登場するナルニア王国の王都、ケア・パラベルにちなむ。'])
@endsection

@section('footer')
    copyright 2020東京情報クリエイター工学院専門学校.
@endsection
@extends('layouts.jissyu')
@section('title', 'Jissyu')
@section('menu_title')
商品追加画面
@endsection
@section('content')
@if (count($errors) > 0)
<div>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="/management/create" method="post">
<table>
@csrf
<tr><th>商品名: </th><td><input type="text" name="com_name" value="{{old('com_name')}}"></td></tr>
<tr><th>価格: </th><td><input type="text" name="price" value="{{old('price')}}"></td></tr>
<tr><th>在庫数: </th><td><input type="number" name="add_qty" value="{{old('add_qty')}}"></td></tr>
<tr><th></th><td><input type="submit" value="商品登録"></td></tr>
</table>
</form>
@endsection
@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
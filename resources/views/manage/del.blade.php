@extends('layouts.jissyu')
@section('title', 'Jissyu')
@section('menu_title')
商品削除画面
@endsection
@section('content')
<form action="/management/remove" method="post">
<table>
@csrf
<input type="hidden" name="id" value="{{$item->id}}">
<tr><th>商品名: </th><td>{{$item->com_name}}</td></tr>
<tr><th>金額: </th><td>{{$item->price}}</td></tr>
<!-- <tr><th>age: </th><td>{{$item->age}}</td></tr> -->
<tr><th></th><td><input type="submit" value="削除"></td></tr>
</table>
</form>
@endsection
@section('footer')
copyright 2020 .
@endsection
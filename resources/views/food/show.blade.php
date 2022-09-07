@extends('layouts.hello')
@section('title', 'Jissyu')
@section('menu_title')
注文一覧
@endsection
@section('content')
<table>
    <tr>
        <th>商品</th>
        <th>註文数</th>
        <th>合計</th>
    </tr>
    @foreach($arry as $item)
    <tr>
        <td>{{$item['com_name']}}</td>
        <td>{{$item['order_num']}}</td>
        <td>{{$item['total']}}</td>
    </tr>
    @endforeach
</table>
<a href="list/comp">購入</a>

@endsection
@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
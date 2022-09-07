@extends('layouts.hello')
@section('title', 'Jissyu')
@section('menu_title')
ご注文ありがとうございます。
@endsection
@section('content')
<table>
    <tr>
        <th>商品</th>
        <th>註文数</th>
        <th>合計</th>
    </tr>
    @foreach($order_comp as $item)
    <tr>
        <td>{{$item['com_name']}}</td>
        <td>{{$item['order_num']}}</td>
        <td>{{$item['total']}}</td>
    </tr>
    @endforeach
</table>
<a href="{{url('/list')}}">TOPに戻る</a>

@endsection
@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
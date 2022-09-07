@extends('layouts.jissyu')
@section('title', 'Jissyu')
@section('menu_title')
商品管理画面
@endsection
@section('content')
    <form action="/management/find" method="post">
    @csrf
    </form>
    <a href="/management/add">商品追加</a>
    <table>
    <tr>
        <th>メニュー</th>
        <th>在庫</th>
        <th>削除</th>
    </tr>
@foreach ($items as $item)
<tr>
    <td>{{$item->getData()}}</td>
    <td>{{$item->qty_data->getData()}}</td>
    <td><a href="/management/del?id={{$item->id}}">削除</a></td>
</tr>
@endforeach

</table>
@endsection
@section('footer')
    copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
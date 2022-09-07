@extends('layouts.hello')
@section('title', 'list.index')

@section('menu_title')
商品一覧<br>
<p>整数で入力してください。</p>
@endsection

@section('content')
    <form action="/list" method="post">
        @csrf
    <table>
        <tr>
            <th>メニュー</th>
            <th>在庫</th>
            <th>注文数</th>
            
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>{{$item->qty_data->getData()}}</td>
                <td><input type="number" name="no_{{$item->id}}"></td>
            </tr>
        @endforeach
    </table>
    <input type="submit" value="注文する">
    </form>
@endsection


@section('footer')
    copyright 20XX o-hara nagano
@endsection
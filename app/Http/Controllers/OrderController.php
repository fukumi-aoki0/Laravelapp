<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Qty;
class OrderController extends Controller
{
    #一覧表示
    public function index(Request $request)
    {
        $items = Product::all();
        $param = [
            'input' => '','items' => $items,
        ];
        return view('food.index', $param);
    }

    public function order(Request $request){
        $form = $request->all();
        unset($form['_token']);
        
        $num = 1;
        foreach($form as $com) {
            if (isset($com)){
            $item = Product::find($num);
            $total = $com * $item->price;
            
            $param = [
            'com_id' =>$item->id,
            'com_name' => $item->com_name,
            'order_num' => $com,
            'total' => $total,
            ];
            $arry[] = $param;
            }
            $num += 1;
        }
        $request->session()->put('arry',$arry);
        return view('food.show',['arry'=>$arry]);  
    }

    public function comp(Request $request){
        $order_comp = $request->session()->get('arry');

        $num = 1;
        foreach($order_comp as $com){
        
        $qty = Qty::find($com['com_id']);
        $list = $qty->qty - $com['order_num'];
        $form = [
            'product_id' => $qty->product_id,
            'qty' => $list,
        ];
        $qty->fill($form)->save();
        }
        return view('food.comp',['order_comp'=>$order_comp]);
    }
};

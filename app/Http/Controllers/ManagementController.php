<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Qty;

class ManagementController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all();
        $param = ['input' => '','items' => $items];
        return view('manage.index', $param);
    }

    public function find(Request $request)
    {
        $item = Product::where('name',$request->input)->first();
        return view('manage.show', ['item' => $item]);
    }

    public function add(Request $request)
    {
        return view('manage.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Product::$rules);
        $product = new Product;
        $form = $request->all();
        unset($form['_token']);
        $product->fill($form)->save();
        // qtyにproduct_idと在庫を入れる
        $qty = new Qty;
        $last_pro = $product->orderBy('id', 'desc')->first();
        $ins = [
            'product_id' => $last_pro->id,
            'qty' => $request->add_qty,
        ];
        $qty->fill($ins)->save();
        return redirect('/management');
    }

    public function del(Request $request)
    {
        $item = Product::find($request->id);
        return view('manage.del', ['item' => $item]);
    }
    public function remove(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/management');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qty;

class Qtycontroller extends Controller
{
    //
    public function index(Request $request)
    {
        $items = Qty::all();
        $param = ['input' => '','items' => $items];
        return view('food.index', $param);
    }
}

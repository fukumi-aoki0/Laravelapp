<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //このモデルはテーproductsブルを参照しています
    protected $table = 'products';
    //バリデーション
    protected $guarded = array('id');

    public static $rules = array(
        'com_name' => 'required',
        'price' => 'required',
    );
    
    //データをテキストで返す
    public function getData()
    {
        return $this->id . ':'. $this->com_name. '(￥'.$this->price.')';
    }

    //ProductテーブルからQtyテーブルを取得する
    public function qty_data(){
        return $this->hasOne('App\Qty');
    }
}

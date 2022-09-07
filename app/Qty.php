<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qty extends Model
{
    
     //このモデルはqtyテーブルを参照しています
     protected $table = 'qty';

    //バリデーション
     protected $guarded = array('id');

     public static $rules = array(
         'product_id' => 'required',
         'qty' => 'required',
     );
     //データをテキストで返す
     public function getData()
     {
         return  $this->qty;
     }
}

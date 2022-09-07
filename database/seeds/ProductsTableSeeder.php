<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'com_name' => 'もも',
            'price' => '130',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => 'ねぎま',
            'price' => '130',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => 'つくね',
            'price' => '130',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => 'かしら',
            'price' => '130',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => 'せせり',
            'price' => '130',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => '牛くし',
            'price' => '180',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => '牛タン',
            'price' => '200',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => '豚タン',
            'price' => '150',
        ];
        DB::table('products')->insert($param);

        $param = [
            'com_name' => 'トマトベーコン巻き',
            'price' => '130',
        ];
        DB::table('products')->insert($param);
    }
}

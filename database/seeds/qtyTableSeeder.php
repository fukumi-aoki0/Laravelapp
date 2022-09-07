<?php

use Illuminate\Database\Seeder;

class qtyTableSeeder extends Seeder
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
            'product_id' => '1',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '2',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '3',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '4',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '5',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '6',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '7',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '8',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);
        $param = [
            'product_id' => '9',
            'qty' => '100',
        ];
        DB::table('qty')->insert($param);

    }
}

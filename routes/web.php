<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('kouka1_1','kouka1_1Controller@index');
// Route::get('kouka1_2', 'Kouka1_2Controller@index');
// Route::post('kouka1_2', 'Kouka1_2Controller@post');


//焼き鳥テイクアウトサイト一覧表示
Route::get('list', 'OrderController@index');
//注文合計画面
Route::post('list', 'OrderController@order');
//注文完了
Route::get('list/comp', 'OrderController@comp');

//在庫
Route::get('qtylist', 'QtyController@index');
Route::post('qtylist', 'QtyController@post');

//管理画面　新規登録、削除
Route::get('management', 'ManagementController@index');

Route::get('management/add', 'ManagementController@add');
Route::post('management/create', 'ManagementController@create');

Route::get('management/del', 'ManagementController@del');
Route::post('management/remove', 'ManagementController@remove');
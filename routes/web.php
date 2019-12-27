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


Route::get('/swoole', function () {
    return view('swoole');
});

Route::get('/curlSs', function () {
    $param = ['s_id'=>2, 'info'=>'info'];
    $param['token'] = '###';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://120.79.22.70:9502");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    //设置post数据
    $post_data = $param;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_exec($ch);
    curl_close($ch);
    return 'ok';
});

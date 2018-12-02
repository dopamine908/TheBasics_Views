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

/*
|--------------------------------------------------------------------------
| 從controller到view的基本用法
|--------------------------------------------------------------------------
*/

Route::get('controller傳遞參數到view', 'ViewDemoController@bringVarToView');

Route::get('如果view在某個資料夾裡', 'ViewDemoController@bringVarToAdminIndex');
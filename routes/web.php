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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| 從controller到view的基本用法
|--------------------------------------------------------------------------
*/

Route::get('controller傳遞參數到view', 'ViewDemoController@bringVarToView');

Route::get('如果view在某個資料夾裡', 'ViewDemoController@bringVarToAdminIndex');

/*
|--------------------------------------------------------------------------
| 檢查view存不存在及救援方法
|--------------------------------------------------------------------------
*/
Route::get('檢查看看view有沒有存在', 'ViewDemoController@checkViewExists');

Route::get('如果第一個view不存在則前往第二個', 'ViewDemoController@ifNoOneThenGoTwoView');


/*
|--------------------------------------------------------------------------
| 用View::composer 讓進入view的時候自動帶入一些我可能需要的共用變數
|--------------------------------------------------------------------------
我在底下兩個route寫了登入之後進去就可以看到自己的use id
經由View::composer帶入值
*/
Route::view('ViewComposerDemo', 'ViewComposerDemoIndex');
Route::view('ViewComposerDemo_other', 'ViewComposerDemoIndex_other');


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewDemoController extends Controller
{
    /**
     * 如果要傳遞參數到view的時候
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bringVarToView() {
        $var = 123;
        return view('DemoIndex', compact("var"));
    }

    /**
     * 如果view放在某資料夾的時候（多層資料夾路徑類推）
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bringVarToAdminIndex() {
        $var = 456;
        return view('Admin.AdminIndex', compact("var"));
    }

    /**
     * 可以判斷要使用的view存在與否
     */
    public function checkViewExists() {
        dump(View::exists('not_exist_view'));
        dump(View::exists('DemoIndex'));
    }

    /**
     * 如果第一個view不存在則前往第二個
     * @return mixed
     */
    public function ifNoOneThenGoTwoView() {
        $var = 789;
        return view()->first(['not_exist_view', 'DemoIndex'], compact("var"));
//        return View::first(['not_exist_view', 'DemoIndex'], compact("var")); //也可以這樣寫
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

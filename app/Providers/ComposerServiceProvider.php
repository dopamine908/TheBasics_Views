<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * 在容器內註冊所有綁定。
     *
     * @return void
     */
    public function boot()
    {
        //View::composer 會執行 App\Http\ViewComposer\UserViewComposer＠composer

        // 使用物件型態的視圖組件…
        View::composer(
            'ViewComposerDemoIndex', 'App\Http\ViewComposer\UserViewComposer'
        );

        // 使用物件型態的視圖組件…(一次註冊多個的寫法)
        View::composer(
            ['ViewComposerDemoIndex', 'ViewComposerDemoIndex_other'],
            'App\Http\ViewComposer\UserViewComposer'
        );

        // 使用閉包型態的視圖組件…
//        View::composer('dashboard', function ($view) {
//            //
//        });

        //也可以用*代表全部
//        View::composer('*', function ($view) {
//            //
//        });
    }

    /**
     * 註冊服務提供者。
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
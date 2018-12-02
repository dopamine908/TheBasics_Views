<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //可以這樣傳遞所有view都會使用的參數
//        View::share('GlobalVar1', '這是全部view都可以看到的到變數1'); //一個的時候
        View::share([
            'GlobalVar1' => '這是全部view都可以看到的到變數1',
            'GlobalVar2' => '這是全部view都可以看到的到變數2',
        ]); //多個的時候

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //加载公共函数
        require app_path('Http/Controllers/Common/Common.php');
        //监听sql操作
        DB::listen(function($sql, $bindings, $time) {
            //打印每次执行的sql语句
            print_r($sql);
        });

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

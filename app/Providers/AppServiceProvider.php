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
        /*DB::listen(function($sql, $bindings, $time) {
            foreach ($sql->bindings as $i => $binding) {
                if ($binding instanceof \DateTime) {
                    $sql->bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
                } else {
                    if (is_string($binding)) {
                        $sql->bindings[$i] = "'$binding'";
                    }
                }
            }

            // Insert bindings into query
            $query = str_replace(array('%', '?'), array('%%', '%s'), $sql->sql);

            $query = vsprintf($query, $sql->bindings);

            // Save the query to file
            $logFile = fopen(
                storage_path('logs' . DIRECTORY_SEPARATOR . date('Y-m-d') . '_query.log'),
                'a+'
            );
            fwrite($logFile, date('Y-m-d H:i:s') . ': ' . $query . PHP_EOL);
            fclose($logFile);
        });*/

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

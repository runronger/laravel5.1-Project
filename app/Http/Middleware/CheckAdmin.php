<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-3-8
 * Time: 下午4:03
 */
namespace App\Http\Middleware;

//Closure，匿名函数，又称为Anonymous functions，是php5.3的时候引入的
use Closure;

class CheckAdmin
{

    /**
     * 进入admin后台先验证
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request,Closure $next)
    {
        if(is_null(session('ADMIN_PASS'))){
            return redirect(url('/'))->with('message','请先登录');
        }else{
            return $next($request);
        }

    }




}
<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-3-8
 * Time: 下午4:20
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    /**
     * admin首页展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $all = DB::table('admin')->get();
//        echo "<pre>";
//        var_dump($all);
//        echo "<pre/>";
//        compact()函数创建包含变量名和它们的值的数组
//        echo Cookie::get();
        return view('admin.index.index');
    }









}
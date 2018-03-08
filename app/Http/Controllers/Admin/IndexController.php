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
class IndexController extends Controller
{
    /**
     * admin首页展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $all = DB::table('admin')->get();
        var_dump($all);
//        compact()函数创建包含变量名和它们的值的数组
        return view('admin.index.index');
    }









}
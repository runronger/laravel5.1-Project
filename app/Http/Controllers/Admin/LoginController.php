<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-3-5
 * Time: 下午6:23
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        if($request->isMethod('post')){

        }
        var_dump($request->all());
    }




}
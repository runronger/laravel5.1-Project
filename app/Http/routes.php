<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//默认门户首页
Route::get('/','Portal\IndexController@index');

//admin模块
//Route::get('/admin/login','Admin\LoginController@login');
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //admin登录
    Route::get('/login','LoginController@login');
    //ajax登录检查
    Route::post('/doLogin','LoginController@doLogin');
});

//member模块
Route::group(['prefix'=>'member','namespace'=>'Member'],function (){
    //会员登录
    Route::get('/login','LoginController@login');
});




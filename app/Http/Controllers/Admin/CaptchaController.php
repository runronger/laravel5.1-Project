<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-3-5
 * Time: 下午5:46
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Mews\Captcha\Captcha;


class CaptchaController extends Controller
{
    public function test()
    {
        return view('captcha.test');
    }

    public function news()
    {
        return Captcha::create('default');
    }





}
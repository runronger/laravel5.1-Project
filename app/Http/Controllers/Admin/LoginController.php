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
use App\Model\Admin\Admin;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Carbon\Carbon;

class LoginController extends Controller
{
    /**
     * 用户登录显示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login()
    {
        if(!is_null(session('MEMBER_PASS')))
        {
            //strpos首次出现位置
            //url()->previous() 获取上一个请求的完整的
            if(strpos(url()->previous(),'/member/login'))
            {
                return redirect('/member/orderList')->with('message','您已登录');
            }
            else
            {
                return redirect(url()->previous())->with('message','您已登录');
            }
        }
        return view('admin.login');
    }

    /**
     * 处理用户登录
     * @param Request $request
     * @return string
     */
    public function doLogin(Request $request)
    {
        if($request->isMethod('post')){
            $name = $request->input('userName');
            $passwd = $request->input('loginPwd');
            $result = Admin::where('loginName',$name)->where('workStatus',1)->first();
            if(is_null($result)){
                return AjaxReturn('用户不存在或已被禁用！',1);
            }else{
                try{
                    if($passwd != Crypt::decrypt($result->passWord)){
                        return AjaxReturn('账号或密码错误！',2);
                    }else{
                        $res = Admin::where('loginName',$name)->update(['lastIP' => $request->ip(), 'lastTime' => Carbon::now()]);
                        if($res){
                            session()->put('ADMIN_PASS',$result);
                            return AjaxReturn('登录成功！', 3);
                        }
                    }
                }catch (DecryptException $e){
                    return AjaxReturn('账号或密码错误!！'.$e, 2);
                }
            }
        }else{
            exit('Method is error');
        }
    }

    /**
     * 退出登录
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signOut(Request $request)
    {
        // pull方法可以只用一条语句就从 Session 检索并且删除一个项目：
        $request->session()->pull('ADMIN_PASS');
        // regenerate重新生成session_id
        $request->session()->regenerate();
        return back()->with('message','您已经退出');
    }


}
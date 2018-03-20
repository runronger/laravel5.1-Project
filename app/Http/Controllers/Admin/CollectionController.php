<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{

    /**
     * url采集渲染模板
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function urlCollection()
    {

        return view('admin.collection.url');
    }


    /**
     * 处理url数据进行采集
     * @param Request $request
     */
    public function doUrlCollection(Request $request)
    {
        if($request->isMethod('post')){
            $content = trim($request->input('content'));
            $preg = '/[\(r|n)]*/i';
            $newMsg = preg_replace($preg,'',$content);
            $host = "192.168.199.98";
            $port = 4455;
            $result = $this->sendSocketMsg($host,$port,$newMsg.'\n',1);
            print_r($result);
        }else{
            exit('Method is error');
        }
    }

    /**
     * socket发送数据
     * @param $host
     * @param $port
     * @param $content
     * @param int $back
     * @return bool|string
     */
    public function sendSocketMsg($host,$port,$content,$back=0)
    {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if($socket<0){
            return false;
        }
        $result = socket_connect($socket,$host,$port);
        if($result == false){
            return false;
        }
//       $res =  socket_send($socket,$content,strlen($content),MSG_OOB);
        socket_write($socket,$content,strlen($content));
        if($back != 0){
            $input = socket_read($socket,1024);
            socket_close($socket);
            return $input;
        }else{
            socket_close($socket);
            return true;
        }
    }

    /**
     * 店铺数据采集渲染
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shopCollection()
    {
        return view('admin.collection.shopCollection');
    }

    /**
     * 处理店铺数据采集
     * @param Request $request
     */
    public function doShopCollection(Request $request)
    {
        if($request->isMethod('post')){

        }else{
            exit('Method is error');
        }
    }






}

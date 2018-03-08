<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-3-7
 * Time: 上午11:27
 */

/**
 * ajax返回
 * @param $msg
 * @param int $status
 * @param array $data
 * @return string
 */
function AjaxReturn($msg,$status=-1,$data=[])
{
    $res = ['status'=>$status,'msg'=>$msg];
    if(!empty($data)){
        $res['data'] = $data;
    }
    return json_encode($res);
}
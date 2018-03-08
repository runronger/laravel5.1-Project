<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
//    public $timestamps = false;


    /**
     * 模型的日期字段的存储格式
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 不可以批量赋值的字段，为空则表示都可以
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
//    protected $fillable = [];

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    protected $dates = ['lastTime'];

}

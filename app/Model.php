<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;


class Model extends BaseModel
{
    protected $guarded = [];  //不可以注入那些数据字段
    //protected $fillable = ['title', 'content']; //可以注入数据字段
}




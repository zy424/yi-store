<?php

namespace App;

use App\Model;

class Product extends Model
{
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','status_id','price','discount'];
}

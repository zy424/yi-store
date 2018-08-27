<?php

namespace App;

use App\Model;

class Product extends Model
{
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 20;

    const STATUSES = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','status_id','price','discount'];

    public function images()
    {
        return $this->hasMany(\App\ProductImage::class, 'product_id', 'id');
    }
}

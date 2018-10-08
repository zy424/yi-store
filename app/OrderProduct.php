<?php

namespace App;


class OrderProduct extends Model
{
    public function productSize()
    {
        return $this->belongsTo('App\ProductSize');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}


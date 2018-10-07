<?php

namespace App;


class Order extends Model
{
    //
    public function orderProducts()
    {
        return $this->hasMany(\App\OrderProduct::class, 'order_id', 'id');
    }

}

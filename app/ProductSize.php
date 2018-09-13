<?php

namespace App;


class ProductSize extends Model
{
    const SIZE_XS = 'XS';
    const SIZE_S = 'S';
    const SIZE_M = 'M';
    const SIZE_L = 'L';
    const SIZE_XL = 'XL';
    const SIZE_XXL = 'XXL';



//    const SIZES = [
//        self::SIZE_XS,
//        self::SIZE_S,
//        self::SIZE_M,
//        self::SIZE_L,
//        self::SIZE_XL,
//        self::SIZE_XXL
//    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}

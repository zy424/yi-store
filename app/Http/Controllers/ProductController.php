<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;
use \App\ProductImage;
use \App\ProductSize;

class ProductController extends Controller
{
    // products list
    public function index() {
        $products = Product::where('status_id', Product::STATUS_ACTIVE)->orderBy("created_at", 'desc')->paginate(9);
        return view("products/index", compact('products'));
    }


    //product detail
    public function show(Product $product, ProductImage $image, ProductSize $size)
    {
        $images = ProductImage::where('product_id', $product->id)->orderBy('created_at', 'desc')->get();
        $sizes = ProductSize::where('product_id', $product->id)->orderBy('created_at', 'desc')->get();
        return view("products/show", compact(['images','sizes','product']));
    }


}

<?php

namespace App\Http\Controllers;

use \App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;

class ProductController extends Controller
{
    // products list
    public function index() {
        $products = Product::where('status_id', Product::STATUS_ACTIVE)->orderBy("created_at", 'desc')->paginate(9);
        return view("products/index", compact('products'));
    }


    //product detail
    public function show(Product $product, ProductImage $image)
    {
        $images = ProductImage::where('product_id', $product->id)->orderBy('created_at', 'desc')->get();
        return view("products/show", compact(['images','product']));
    }


}

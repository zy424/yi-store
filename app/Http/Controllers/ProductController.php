<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    // products list
    public function index() {
        $products = Product::orderby('created_at','desc')->paginate(6);
        return view("products/index", compact('products'));
    }



}

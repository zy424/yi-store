<?php

namespace App\Http\Controllers;

use \App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;

class HomeController extends Controller
{
    public function index() {
        $latestProducts = Product::where('status_id', Product::STATUS_ACTIVE)->orderBy("created_at", 'desc')->take(4)->get();
        $allProducts = Product::where('status_id', Product::STATUS_ACTIVE)->orderBy("created_at", 'desc')->paginate(9);
        return view("home/index", compact(['latestProducts','allProducts']));
    }
}

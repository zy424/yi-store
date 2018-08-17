<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//homepage
Route::get('/', function () {
    return view('home.index');
});

//products-detail page

Route::get('/products', function () {
    return view('products.index');
});


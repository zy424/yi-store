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
Route::get('/home', function () {
    return view('home.index');
});

//products page
Route::get('/products', function () {
    return view('products.index');
});
//products-detail page
Route::get('/products-detail', function () {
    return view('products.show');
});

//shipping cart
Route::get('/cart', function () {
    return view('cart.index');
});




// about page
Route::get('/about', function () {
    return view('about.index');
});

// contact page
Route::get('/contact', function () {
    return view('contact.index');
});


//Admin
Route::get('/admin/login','\App\Admin\Controllers\LoginController@index');

//login action
Route::post('/admin/login','\App\Admin\Controllers\LoginController@login');

Route::get('/admin/logout','\App\Admin\Controllers\LoginController@logout');



//first page
Route::get('/admin/home','\App\Admin\Controllers\HomeController@index');




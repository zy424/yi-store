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
Route::get('/products', 'ProductController@index');


//products-detail page
Route::get('/products/detail', function () {
    return view('products.show');
});

//shipping cart
Route::get('/cart', function () {
    return view('cart.index');
});

//checkout
Route::get('/checkout', function () {
    return view('checkout.index');
});

//order-complete
Route::get('/order-complete', function () {
    return view('order-complete.index');
});

//add-to-wishlist
Route::get('/wishlist', function () {
    return view('wishlist.index');
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
// TODO combine them into one route
Route::get('/admin/login','\App\Admin\Controllers\LoginController@index')->name('login');

//login action
Route::post('/admin/login','\App\Admin\Controllers\LoginController@login');

Route::get('/admin/logout','\App\Admin\Controllers\LoginController@logout');


//home page
Route::get('/admin/home','\App\Admin\Controllers\HomeController@index');

//products management
Route::group(['middleware' => 'auth'], function(){
    Route::resource('/admin/products','\App\Admin\Controllers\ProductController',['only'=>['index','create', 'store']]);
    Route::get('/admin/products/{product}/destroy','\App\Admin\Controllers\ProductController@destroy');
    Route::get('/admin/products/{product}/edit', '\App\Admin\Controllers\ProductController@edit');
    Route::post('/admin/products/{product}', '\App\Admin\Controllers\ProductController@update');

});





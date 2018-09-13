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
Route::get('/','HomeController@index' );
Route::get('/home', 'HomeController@index');

//products page
Route::get('/products', 'ProductController@index');


//products-detail page
Route::get('/products/{product}/detail','ProductController@show' );

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

    Route::model('productImage', App\ProductImage::class);
    Route::model('productSize', App\ProductSize::class);

    Route::resource('/admin/products','\App\Admin\Controllers\ProductController',['only'=>['index','create', 'store']]);
    Route::get('/admin/products/{product}/destroy','\App\Admin\Controllers\ProductController@destroy');
    Route::get('/admin/products/{product}/edit', '\App\Admin\Controllers\ProductController@edit');
    Route::post('/admin/products/{product}', '\App\Admin\Controllers\ProductController@update');
    Route::get('/admin/products/{product}/image', '\App\Admin\Controllers\ProductController@images');
    Route::post('/admin/products/{product}/image-store', '\App\Admin\Controllers\ProductController@imagesStore');
    Route::get('/admin/products/{product}/{productImage}/image-delete', '\App\Admin\Controllers\ProductController@imageDelete');
    Route::get('/admin/products/{product}/size', '\App\Admin\Controllers\ProductController@sizes');
    Route::get('/admin/products/{product}/size-create', '\App\Admin\Controllers\ProductController@sizeCreate');
    Route::post('/admin/products/{product}/size-store', '\App\Admin\Controllers\ProductController@sizeStore');
    Route::get('/admin/products/{productSize}/size-edit', '\App\Admin\Controllers\ProductController@sizeEdit');
    Route::post('/admin/products/{productSize}/size-update', '\App\Admin\Controllers\ProductController@sizeUpdate');
    Route::get('/admin/products/{product}/{productSize}/size-delete', '\App\Admin\Controllers\ProductController@sizeDelete');
});







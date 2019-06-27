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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', function(){
    return view('pages.shop');
})->name('shop');
Route::get('/blog', function(){
    return view('pages.blog');
})->name('blog');
Route::get('/about', function(){
    return view('pages.about');
})->name('about');
Route::get('/cart', function(){
    return view('pages.shop');
})->name('cart');
Route::get('/checkout', function(){
    return view('pages.checkout');
})->name('checkout');
Route::get('/shop/product', function(){
    return view('pages.product');
})->name('product');

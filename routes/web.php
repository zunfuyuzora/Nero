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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

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
    return view('pages.cart');
})->name('cart');
Route::get('/checkout', function(){
    return view('pages.checkout');
})->name('checkout');
Route::get('/shop/product', function(){
    return view('pages.product');
})->name('product');

Route::get('/react/{path?}', function(){
    return view('app');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontview/index');
});

Route::get('/about', function () {
    return view('frontview/about');
});

Route::get('/blog-detail', function () {
    return view('frontview/blog-detail');
});

Route::get('/index', function () {
    return view('frontview/index');
});

Route::get('/blog', function () {
    return view('frontview/blog');
});

Route::get('/contact', function () {
    return view('frontview/contact');
});

Route::get('/home-02', function () {
    return view('frontview/home-02');
});

Route::get('/home-03', function () {
    return view('frontview/home-03');
});

Route::get('/login', function () {
    return view('frontview/login');
});

Route::get('/product', function () {
    return view('frontview/product');
});

Route::get('/product-detail', function () {
    return view('frontview/product-detail');
});

Route::get('/product-detail', function () {
    return view('frontview/product-detail');
});

Route::get('/register', function () {
    return view('frontview/register');
});

Route::get('/shoping-cart', function () {
    return view('frontview/shoping-cart');
});


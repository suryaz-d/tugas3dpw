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

Route::get('induk', function () {
    return view('template.induk');
});

Route::get('template', function(){
    return view('template.base');
});

Route::get('beranda', function(){
    return view('beranda');
});

Route::get('produk', function(){
    return view('produk');
});

Route::get('kategori', function(){
    return view('kategori');
});

Route::get('promo', function(){
    return view('promo');
});

Route::get('adminlogin', function(){
    return view('adminlogin');
});

Route::get('login', function(){
    return view('login');
});

Route::get('home', function(){
    return view('home');
});

Route::get('product', function(){
    return view('product');
});

Route::get('about', function(){
    return view('about');
});

Route::get('whyus', function(){
    return view('whyus');
});

Route::get('testimonial', function(){
    return view('testimonial');
});
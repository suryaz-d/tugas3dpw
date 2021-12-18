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

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/admin', function () {
    return view('layout/admin');
});

Route::get('/login', function () {
    return view('layout/login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

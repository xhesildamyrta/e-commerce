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
    return view('welcome');
});
Route::get('/shop-list', function () {
    return view('shop-list');
});
Route::get('/all-products', function () {
    return view('all-products');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/contact', function () {
    return view('contact-us');
});
Route::get('/success', function () {
    return view('order-success');
});

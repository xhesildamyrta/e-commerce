<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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
    return view('home');
});
Route::get('/shop-list', function () {
    return view('shop-list');
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

/*Authentication*/
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('user-login', [AuthController::class, 'userLogin'])->name('login.user'); 
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('user-registration', [AuthController::class, 'store'])->name('register.user'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/all-products', [App\Http\Controllers\ProductController::class, 'index'])->name('all-products');
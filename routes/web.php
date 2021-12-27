<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BlogController;

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




Route::get('/about', function () {
    return view('about-us');
});
Route::get('/blog', function () {
    return view('blog');
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
Route::get('/product-list', [App\Http\Controllers\ProductController::class, 'ShopList'])->name('product-list');


Route::get('/', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/product-filter', [\App\Http\Controllers\FindController::class, 'index'])->name('product-filter');


Route::get('/create', [\App\Http\Controllers\BlogController::class, 'create'])->name('create');
Route::post('/create', [\App\Http\Controllers\BlogController::class, 'store'])->name('create-blog');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');


Route::get('/comment', [\App\Http\Controllers\CommentsController::class, 'index'])->name('create-comment');
Route::post('/comment/{id}', [\App\Http\Controllers\CommentsController::class, 'store'])->name('post-comment');



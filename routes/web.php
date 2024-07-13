<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\productController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [productController::class,'index'])->name('home');

Route::get('/allproducts',[productController::class,'products']);

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/create',[productController::class,'create']);

Route::post('product/store',[productController::class,'store']);

Route::get('/{id}/details',[productController::class,'details']);

Route::get('/{id}/update',[productController::class,'update']);

Route::put('product/{id}/updated',[productController::class,'updated']);

Route::get('product/{id}/deleted',[productController::class,'deleted']);



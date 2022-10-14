<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth2\RegisterController;

Route::get('/', function () {
    return view('shops.index');
});

Route::resource('shops', ShopController::class);
Route::post('shops/fabrica/{fabrica}', [ShopController::class, 'fabricaF'])->name('shops.fabrica');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

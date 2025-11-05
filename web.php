<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// 🏠 Halaman utama
Route::get('/', function () {
    return view('home');
});

// 🧃 Daftar produk & detail produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// ℹ️ Halaman statis
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

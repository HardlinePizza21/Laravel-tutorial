<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/products', [ProductController::class,'index'])->name('product.index');
Route::get('/products/create', [ProductController::class,'create'])->name('product.create');
Route::post('/products/save', [ProductController::class,'save'])->name('product.save');
Route::get('/products/{id}', [ProductController::class,'show'])->name('product.show');

Route::fallback([HomeController::class, 'index'])->name('home.index');

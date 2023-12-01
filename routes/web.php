<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MidController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'tampil'])->name('category-index');
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');
Route::delete('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category-delete');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');
Route::patch('/category/{id}/update', [CategoryController::class, 'update'])->name('category-update');

Route::get('/mid', [MidController::class, 'tampil'])->name('mid-index');
Route::get('/mid/create', [MidController::class, 'tambah'])->name('mid-create');
Route::post('/mid/store', [MidController::class, 'simpan'])->name('mid-store');
Route::delete('/mid/{id}/delete', [MidController::class, 'delete'])->name('mid-delete');
Route::get('/mid/{id}/edit', [MidController::class, 'edit'])->name('mid-edit');
Route::patch('/mid/{id}/update', [MidController::class, 'update'])->name('mid-update');

// Route::resource('product', ProductController::class);
Route::get('/product', [ProductController::class, 'tampil'])->name('product-index');
Route::get('/product/create', [ProductController::class, 'tambah'])->name('product-create');
Route::post('/product/store', [ProductController::class, 'simpan'])->name('product-store');
Route::delete('/product/{id}/delete', [ProductController::class, 'delete'])->name('product-delete');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::patch('/product/{id}/update', [ProductController::class, 'update'])->name('product-update');


Route::get('/dashboard', function () {
    return view('dashboard');
});

//route utama
Route::get('/', function () {
    return view('welcome');
});

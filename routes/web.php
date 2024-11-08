<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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
    return response()->json([
        'message' => 'success',
        'data' => 'Hello World',
        'code' => 200
    ]);
});

Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories', [CategoryController::class,'index'])->name('categories.index');
Route::put('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class,'update'])->name('categories.update');

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::put('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProductController::class,'index']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');
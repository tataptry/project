<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [ProductController::class,'index']);
//Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

//Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
//Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

//Route::get('/Contact', [ContactController::class, 'create']);
//Route::post('/Contact', [ContactController::class, 'store'])->name('contact.store');

//Route::get('/admin', [AdminController::class, 'create']);
//Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

//Route::get('/home', function () {
//    return view('Home');
// });

Route::get('/users', [UsersController::class, 'index']);
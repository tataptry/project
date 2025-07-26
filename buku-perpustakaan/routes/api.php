<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BukuController;

Route::apiResource('buku', BukuController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::get('/category', [ProductController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'food']);
    Route::get('/beauty-health', [ProductController::class, 'beauty']);
    Route::get('/home-care', [ProductController::class, 'home']);
    Route::get('/baby-kid', [ProductController::class, 'baby']);
});

Route::get('/user/{id}/nama/{name}', [UserController::class, 'index']);

Route::get('/transaction', [TransactionController::class, 'index']);


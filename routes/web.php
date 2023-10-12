<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfoController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/gioi-thieu', [InfoController::class, 'index'])->name('info');

Route::prefix('admin')->group (function () {
    Route::get('/', [AdminController::class, 'index']);
});
Route::prefix('/tin-tuc')->group (function () {
    Route::get('/', [NewsController::class, 'index'])->name('news');
    Route::get('/chi-tiet', [NewsController::class, 'getNews'])->name('full-new');
});
Route::prefix('/san-pham')->group (function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/chi-tiet', [ProductController::class, 'getProduct'])->name('full-product');
});
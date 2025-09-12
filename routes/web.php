<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [IndexController::class,'home']);
Route::get('/dich_vu', [IndexController::class,'dichVu'])->name('dichVu'); // tat ca dich vu thuoc game
Route::get('/dich_vu/{slug}', [IndexController::class,'dichVuCon'])->name('dichVuCon'); // dich vu con thuoc dich vu
Route::get('/danh_muc', [IndexController::class,'danhMuc'])->name('danhMuc'); // tat ca danh muc thuoc game
Route::get('/danh_muc/{slug}', [IndexController::class,'danhMucCon'])->name('danhMucCon');
Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

// category
Route::resource('category', CategoryController::class);


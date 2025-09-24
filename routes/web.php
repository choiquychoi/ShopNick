<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AccessoriesController;

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
Route::get('/danh_muc_game/{slug}', [IndexController::class,'danhMuc_game'])->name('danhMucGame');
Route::get('/danh_muc_con/{slug}', [IndexController::class,'danhMucCon'])->name('danhMucCon');
Route::get('/blogs', [IndexController::class,'blogs'])->name('blogs');
Route::get('/post/{slug}', [IndexController::class,'blogs_detail'])->name('blogs_detail');

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

// category
Route::resource('/category', CategoryController::class);
// category
Route::resource('/accessories', AccessoriesController::class);
//slider
Route::resource('/slider', SliderController::class); 
//blog
Route::resource('/blog', BlogController::class); 
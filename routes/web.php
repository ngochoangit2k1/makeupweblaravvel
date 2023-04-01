<?php

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
    return view('layout/index');
});
Route::get('/tin-tuc', function () {
    return view('layout/blog');
});

Route::get('/khach-hang', function () {
    return view('layout/lagding-page');
});

Route::get('/news', [NewsController::class, 'layout/blog'])->name('blog.index');

Route::get('/san-pham', function () {
    return view('layout/product');
});

Route::get('/bai-viet-chi-tiet', function () {
    return view('layout/blog-details');
});
Route::get('/bai-viet-chi-tiet', function () {
    return view('layout/blog-details');
});
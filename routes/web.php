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

Route::prefix('/')->namespace('Frontend')->group(function () {
    Route::name('pages.')->group(function () {
        Route::get('/', 'PageController@showHome')->name('home');
        Route::get('/products', 'PageController@showProducts')->name('products');
        Route::get('/categories', 'PageController@showCategories')->name('categories');
        Route::get('/{category}/{product}', 'PageController@showProduct')->name('product');
    });
});



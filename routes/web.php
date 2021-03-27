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


Route::get('/', 'ProductController@home');

Route::get('/add-product', 'ProductController@addProduct');

Route::post('/store-product', 'ProductController@storeProduct')->name('/store-product');

Route::get('/single-product/product-id={id}', 'ProductController@viewProduct');

Route::post('/search-product', 'ProductController@searchProduct')->name('/search-product');

Route::get('/sort-products/key={key}', 'ProductController@sortProduct');

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

Route::get('/', 'ProductController@index');

Route::get('/create', 'ProductController@create');

Route::get('/product', 'ProductController@ViewProduct');

Route::get('/product/edit/{id}', 'ProductController@edit');

Route::patch('/product/update/{id}', 'ProductController@update');

Route::get('/product/delete/{id}', 'ProductController@delete');

Route::post('/store', 'ProductController@store');

Route::get('/category/create', 'CategoryController@form');

Route::get('/category', 'CategoryController@ViewCategory');

Route::post('/category/store', 'CategoryController@store');

Route::get('/category/delete/{id}', 'CategoryController@delete');
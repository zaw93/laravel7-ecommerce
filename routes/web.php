<?php

use Illuminate\Support\Facades\Auth;
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


// FRONTEND
Route::get('/', 'PageController@index')->name('index');

Route::get('/product/{id}', 'PageController@show')->name('product');

Route::get('/cart', 'PageController@cart')->name('cart');

Route::get('/quickview/{item}', 'PageController@quickView')->name('quickview');

Route::post('/search', 'SearchController@search')->name('search');


// CRUD BACKEND
Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::resource('/category', 'CategoryController');
  Route::resource('/subcategory', 'SubcategoryController');
  Route::resource('/brand', 'BrandController');
  Route::resource('/item', 'ItemController');
});

Route::resource('/order', 'OrderController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

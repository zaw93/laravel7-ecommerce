<?php

use App\Http\Controllers\GalleryPhotoController;
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

Route::get('/shop', 'PageController@shop')->name('shop');
Route::post('/shop/filter', 'PageController@shopFilter')->name('shop.filter');

Route::get('/collection/{subcategory}', 'PageController@collect')->name('collection');

Route::get('/cart', 'PageController@cart')->name('cart');

Route::get('/checkout', 'PageController@checkout')->name('checkout');

Route::get('/quickview/{item}', 'PageController@quickView')->name('quickview');

Route::post('/search', 'SearchController@search')->name('search');

Route::middleware(['auth', 'role:customer'])->group(function () {
  Route::post('/order', 'OrderController@store');
});



// CRUD BACKEND
Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::resource('/category', 'CategoryController');
  Route::resource('/subcategory', 'SubcategoryController');
  Route::resource('/brand', 'BrandController');
  Route::resource('/item', 'ItemController');

  Route::get('/item/{item}/gallery', 'GalleryPhotoController@create')->name('item.gallery-create');
  Route::post('/item/{item}/gallery', 'GalleryPhotoController@store')->name('item.gallery-store');
  Route::get('/item/{item}/gallery/edit', 'GalleryPhotoController@edit')->name('item.gallery-edit');
  Route::post('/item/{item}/gallery/update', 'GalleryPhotoController@update')->name('item.gallery-update');

  Route::get('/order', 'OrderController@index')->name('order.index');
  Route::get('/order/{order}/edit', 'OrderController@edit')->name('order.edit');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

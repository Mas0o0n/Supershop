<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
//where('name','[A-Za-z]+' )
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'SiteController@index')->name('home');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/add/{id}', 'CartController@cartAdd')->name('cart-add');
Route::post('/cart/remove/{id}', 'CartController@cartRemove')->name('cart-remove');

Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/category/{id}/{page?}', 'CatalogController@category')->where('id', '[0-9]+' )->name('category');

Route::get('/product/{id}', 'ProductController@product')->where('id', '[0-9]+')->name('product');

Route::get('/login', [Controllers\UserController::class, 'index'])->name('login');



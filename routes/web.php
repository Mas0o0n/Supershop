<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\Admin;

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

Auth::routes([
    'password.confirm' => false,
    'password.reset' => false,
    'password.request' => false,
    ]);

Route::group([
    'middleware' => 'is_admin',
    'namespace' => 'Admin',
    'prefix' => 'admin'

], function() {
    Route::get('/orders', 'OrderController@index')->name('home');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});

Route::get('/', 'SiteController@index')->name('site');

//Cart routes:
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/confirm', 'CartController@confirmOrder')->name('cart-confirm');
Route::post('/cart/save_order', 'CartController@saveOrder')->name('cart-save');
Route::post('/cart/add/{id}', 'CartController@cartAdd')->name('cart-add');
Route::post('/cart/remove/{id}', 'CartController@cartRemove')->name('cart-remove');

//Catalog routes and product
Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/category/{id}/{page?}', 'CatalogController@category')->where('id', '[0-9]+' )->name('category');
Route::get('/product/{id}', 'ProductController@product')->where('id', '[0-9]+')->name('product');


Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');



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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [SiteController::class,'index']);
Route::get('/catalog', [Controllers\CatalogController::class,'index']);
Route::get('/product', [Controllers\ProductController::class,'index']);
Route::get('/login', [Controllers\UserController::class,'index']);

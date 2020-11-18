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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/' , [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/categories' , [\App\Http\Controllers\MainController::class, 'categories']);

Route::get('/{category}' , [\App\Http\Controllers\MainController::class, 'category']);

Route::get('/mobiles/{product?}' , [\App\Http\Controllers\MainController::class, 'product']);

//Route::get('/categories', function () {
//   return view('categories');
//});
//
//Route::get('/mobiles/iphone_x_64', function () {
//   return view('product');
//});

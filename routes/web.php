<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\CartController;
//use App\Models\ProductOld;
//use App\Models\Product;

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

// home/index page
Route::get('/', [ProductController::class, 'index']);
// detail page for product --> show
// route model binding
Route::get('/products/{product}', [ProductController::class, 'show']);


// show cart page
Route::get('/cart/show', [CartController::class, 'show']);
Route::post('/cart/add', [CartController::class, 'add']);
Route::post('/cart/update', [CartController::class, 'update']);
Route::post('/cart/empty', [CartController::class, 'empty']);


// show user registration page --> create method
Route::get('/users/register', [UserController::class, 'create']);

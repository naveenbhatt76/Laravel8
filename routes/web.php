<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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
Route::view('signup', 'signup');

Route::post('savedata', [UserController::Class, 'saveData']);

Route::get('/', [ProductController::Class, 'index']);
Route::get('/login', function(){
	return view('login');
});

// Route::get('new',[AdminController::Class, 'index']);

Route::post('login',[UserController::Class, 'login']);

Route::get('dashboard',[ProductController::Class, 'index']);
Route::get('detail/{id}',[ProductController::Class, 'detail']);
Route::post('search',[ProductController::Class, 'search']);
Route::post('addtocart', [ProductController::Class,'addToCart']);
// Route::get('logout', [UserController::Class, 'logout']);
Route::get('logout',function(){
	Session::forget('user');
	return redirect('/login');
});
Route::get('cartlist', [ProductController::Class,'cartList']);
Route::get('count',[ProductController::Class,'cartItem']);

Route::get('removefromcart/{id}',[ProductController::Class,'removeFromCart']);

Route::get('placeorder',[ProductController::Class, 'placeOrder']);
Route::post('ordernow', [ProductController::Class, 'orderNow']);
Route::get('orders',[ProductController::Class,'orderList']);
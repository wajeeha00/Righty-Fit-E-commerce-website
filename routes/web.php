<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get("/sneakers",[ProductController::class,'show']);
Route::get("/sports",[ProductController::class,'show_sports']);
Route::get("/casual",[ProductController::class,'show_casual']);
Route::get("/help",[ProductController::class,'display']);
Route::get("/below",[ProductController::class,'below']);
Route::post("add_to_wish",[ProductController::class,'addTowish']);
Route::get("wishlist",[ProductController::class,'wishList']); 
Route::get("removewish/{id}",[ProductController::class,'removeWish']); 
Route::get("/aboutus",[ProductController::class,'displaya']);
Route::fallback(function (){
    echo "sorry";
});









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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});





Route::view('login', 'login');


Route::post('login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('/list/{id}',[ProductController::class,'list']);
Route::get('search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addtocart']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);
Route::get('/myorders',[ProductController::class,'myOrders']);

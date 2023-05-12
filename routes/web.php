<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Productadd;


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

//Route::get('/', function () {
  //  return view('product');
//});

Route::get('detail',[ProductController::class,'product']);
Route::get('register',[ProductController::class,'register']);

Route::get('login', function () {
    return view('login');
})->name("login");

Route::get('reset-password', function () {
    echo "Salut";
    return "hello";
})->name("password.request");

Route::get('register', function () {
    return view('register');
})->name("register");

Route::post('store',[ProductController::class,'store'])->name('form.store');
Route::post("loginpost",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);


/* Product add */
Route::get('productadd',[Productadd::class,'index']);
Route::post('create',[Productadd::class,'create'])->name('create');
Route::get('read',[Productadd::class,'read']);
Route::get('edit/{id}',[Productadd::class,'edit']);
Route::post('update/{id}',[Productadd::class,'update']);
Route::get('delete/{id}',[Productadd::class,'delete']);







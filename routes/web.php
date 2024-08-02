<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;





//Admin login
//login form ta view login method er maddhomey
Route::get('/login',[AuthenticationController::class,'login'])->name('login');

//amra login check korey dashboard e nia gesi
Route::post('/do-login',[AuthenticationController::class,'do_login'])->name('do.login');

//my-dashboard view


Route::group(['middleware' => 'auth'],function(){

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard'); 

// //order
Route::get('/order-list',[OrderController::class,'list'])->name('order.list');
Route::get('/order-form',[OrderController::class,'form'])->name('order.form');
Route::post('/order-store',[OrderController::class,'store'])->name('order.samiur');

 });











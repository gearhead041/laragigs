<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
Route::get('/',[ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');

//show single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//store listing data
Route::post('/listings',[ListingController::class,'store']);

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//submit to update
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//submit to delete
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');


//show register form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

Route::post('/users',[UserController::class,'store']);

//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

Route::post('/users/login', [UserController::class, 'authenticate']);

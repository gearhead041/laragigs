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
Route::get('/listings/create', [ListingController::class, 'create']);

//show single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//store listing data
Route::post('/listings',[ListingController::class,'store']);

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//submit to update
Route::put('/listings/{listing}',[ListingController::class,'update']);

//submit to delete
Route::delete('/listings/{listing}',[ListingController::class,'destroy']);

//show register form
Route::get('/register',[UserController::class,'create']);
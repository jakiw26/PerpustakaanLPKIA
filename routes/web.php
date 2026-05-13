<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BorrowingsController;
use App\Http\Controllers\BorrowingsDetailsController;
use App\Http\Controllers\ReturnsController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

//landing page
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/admin', [LandingPageController::class, 'admin']);


//borrowings
Route::get('/borrowings', [BorrowingsController::class, 'index']);
Route::post('/borrowings/store', [BorrowingsController::class, 'store']);
Route::put('/borrowings/update/{id}', [BorrowingsController::class, 'update']);
Route::delete('/borrowings/delete/{id}', [BorrowingsController::class, 'destroy']);

//borrowings detail
Route::get('/borrowingsdetails', [BorrowingsDetailsController::class, 'index']);
Route::post('/borrowingsdetails/store', [BorrowingsDetailsController::class, 'store']);
Route::put('/borrowingsdetails/update/{id}', [BorrowingsDetailsController::class, 'update']);
Route::delete('/borrowingsdetails/delete/{id}', [BorrowingsDetailsController::class, 'destroy']);

//returns
Route::get('/returns', [ReturnsController::class, 'index']);
Route::post('/returns/store', [ReturnsController::class, 'store']);
Route::put('/returns/update/{id}', [ReturnsController::class, 'update']);
Route::delete('/returns/delete/{id}', [ReturnsController::class, 'destroy']);

//User
Route::get('/User', [UserController::class, 'index']);
Route::post('/User/store', [UserController::class, 'store']);
Route::put('/User/update/{id}', [UserController::class, 'update']);
Route::delete('/User/delete/{id}', [UserController::class, 'delete']);

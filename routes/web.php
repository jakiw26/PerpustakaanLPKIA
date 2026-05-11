<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BorrowingsController;
use App\Http\Controllers\BorrowingsDetailsController;

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
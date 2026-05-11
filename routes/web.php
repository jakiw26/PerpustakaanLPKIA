<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

// Route::get('/', function () {
//     return view('welcome');
// });

//route awal
Route::get('/', [LandingPageController::class, 'index']);

// a href di landing page
Route::get('/admin', function () {
    return view('admin.index');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BorrowingsController;
use App\Http\Controllers\BorrowingsDetailsController;
use App\Http\Controllers\ReturnsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PublishersController;

// Route::get('/', function () {
//     return view('welcome');
// });

//landing page
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/admin', [LandingPageController::class, 'admin']);


//borrowings
Route::get('/admin/borrowings', [BorrowingsController::class, 'index']);
Route::post('/borrowings/store', [BorrowingsController::class, 'store']);
Route::put('/borrowings/update/{id}', [BorrowingsController::class, 'update']);
Route::delete('/borrowings/delete/{id}', [BorrowingsController::class, 'destroy']);

//borrowings detail
Route::get('/admin/borrowingsdetails', [BorrowingsDetailsController::class, 'index']);
Route::post('/borrowingsdetails/store', [BorrowingsDetailsController::class, 'store']);
Route::put('/borrowingsdetails/update/{id}', [BorrowingsDetailsController::class, 'update']);
Route::delete('/borrowingsdetails/delete/{id}', [BorrowingsDetailsController::class, 'destroy']);

//returns
Route::get('/admin/returns', [ReturnsController::class, 'index']);
Route::post('returns/store', [ReturnsController::class, 'store']);
Route::put('/returns/update/{id}', [ReturnsController::class, 'update']);
Route::delete('/returns/delete/{id}', [ReturnsController::class, 'destroy']);

//User
Route::get('/User', [UserController::class, 'index']);
Route::post('/User/store', [UserController::class, 'store']);
Route::put('/User/update/{id}', [UserController::class, 'update']);
Route::delete('/User/delete/{id}', [UserController::class, 'delete']);

//Members
Route::get('/members', [MembersController::class, 'index']);
Route::post('/members/store', [MembersController::class, 'store']);
Route::put('/members/update/{id}', [MembersController::class, 'update']);
Route::delete('/members/delete/{id}', [MembersController::class, 'delete']);

//Books
Route::get('/books', [BooksController::class, 'index']);
Route::post('/books/store', [BooksController::class, 'store']);
Route::put('/books/update/{id}', [BooksController::class, 'update']);
Route::delete('/books/delete/{id}', [BooksController::class, 'delete']);

//categories
Route::get('/admin/categories', [CategoriesController::class, 'index']);
Route::post('/categories/store', [CategoriesController::class, 'store']);
Route::put('/categories/update/{id}', [CategoriesController::class, 'update']);
Route::delete('/categories/delete/{id}', [CategoriesController::class, 'destroy']);

//authors
Route::get('/admin/authors', [AuthorsController::class, 'index']);
Route::post('/authors/store', [AuthorsController::class, 'store']);
Route::put('/authors/update/{id}', [AuthorsController::class, 'update']);
Route::delete('/authors/delete/{id}', [AuthorsController::class, 'destroy']);

//publishers
Route::get('/admin/publishers', [PublishersController::class, 'index']);
Route::post('/publishers/store', [PublishersController::class, 'store']);
Route::put('/publishers/update/{id}', [PublishersController::class, 'update']);
Route::delete('/publishers/delete/{id}', [PublishersController::class, 'destroy']);

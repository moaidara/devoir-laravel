<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\ReviewsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [bookController::class, 'index']);

Route::get('/books/{id}', [bookController::class, 'show'])->name('books.show');

Route::post('/books/{book}/reviews', [ReviewsController::class, 'store'])->name('reviews.store');

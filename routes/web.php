<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/book",[\App\Http\Controllers\BookController::class,"getAll"]);
Route::get("/book-delete/{id}",[\App\Http\Controllers\BookController::class, "bookDelete"]);
Route::get("/book-add", function () {
    return view("book_add");
});
Route::post("/book-save", [\App\Http\Controllers\BookController::class, "saveBookCreate"]);
Route::get("/book-update/{id}",[\App\Http\Controllers\BookController::class,"bookEdit"]);
Route::post("/book-edit",[\App\Http\Controllers\BookController::class,"bookUpdate"]);
Route::get("/book/{id}", [\App\Http\Controllers\BookController::class, "bookDetail"])->name('book_detail');

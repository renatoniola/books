<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome')->with('title', 'welcommeee page');
});

// Page routes
Route::get('/books', [BookController::class, 'books'])->name('all-books');
Route::get('/my-books', [BookController::class, 'myBooks'])->middleware('auth')->name('my-books');
Route::get('/my-authors', [AuthorController::class, 'myAuthors'])->middleware('auth')->name('my-authors');
Route::get('/authors', [AuthorController::class, 'authors'])->name('all-authors');
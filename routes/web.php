<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome')->with('title', 'welcommeee page');
});

// Page routes
Route::controller(BookController::class)->group(function () {
    Route::get('/book/{book}', 'show')->name('book');
    Route::get('/books', 'index')->name('all-books');
    Route::get('/my-books', 'myBooks')->middleware('auth')->name('my-books');
});

Route::controller(AuthorController::class)->group(function () {
    Route::get('/my-authors', 'myAuthors')->middleware('auth')->name('my-authors');
    Route::get('/authors', 'index')->name('all-authors');
});

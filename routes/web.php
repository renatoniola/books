<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome')->with('title', 'welcommeee page');
});

// Page routes
Route::get('/books', [BookController::class, 'books']);
Route::get('/authors', [AuthorController::class, 'authors']);
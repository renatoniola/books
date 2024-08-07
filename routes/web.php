<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookController;
use App\Livewire\AuthorController;
use App\Livewire\AuthorsList;

Route::get('/', function () {
    return view('livewire.dashboard')
    ->with('title', 'welcommeee page')
    ;
})->name('dashboard');

// Page routes
Route::controller(BookController::class)->group(function () {
    Route::get('/book/{book}', 'show')->name('book');
    Route::get('/books', 'index')->name('all-books');
    Route::get('/my-books', 'myBooks')->middleware('auth')->name('my-books');
});

Route::controller(AuthorController::class)->group(function () {
    Route::get('/author/{author}', 'show')->name('author');
    Route::get('/authors', 'index')->name('all-authors');
});

Route::controller(AuthorsList::class)->group(function () {
    Route::get('/my-authors', 'render')->middleware('auth')->name('my-authors');
});

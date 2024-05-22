<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {

        return view('books', [
            'books' =>  Book::with('myBooks')->paginate(10),
            'statuses' => BookStatus::all(),
            'title' => 'Books'
        ]);
    }

    public function show(Book $book): View
    {

        return view('book', [
            'book' =>  $book,
        ]);
    }

    public function myBooks(): View
    {

        return view('books', [
            'books' => Auth::user()->myBooks()->orderBy('books.created_at', 'DESC')->paginate(10),
            'statuses' => BookStatus::all(),
            'title' => 'My Books'
        ]);
    }
}

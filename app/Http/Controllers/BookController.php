<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookStatus;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function myBooks()
    {
        
        return view('books', [
            'books' => Auth::user()->myBooks()->orderBy('books.created_at', 'DESC')->paginate(10),
            'statuses' => BookStatus::all(),
            'title' => 'My Books'
        ]);
    }

    public function books()
    {
        
        return view('books', [
            'books' =>  Book::with('myBooks')->paginate(10),
            'statuses' => BookStatus::all(),
            'title' => 'Books'
        ]);
    }

}

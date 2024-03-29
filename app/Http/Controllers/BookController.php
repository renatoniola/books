<?php

namespace App\Http\Controllers;

use App\models\Book;

class BookController extends Controller
{

    public function books()
    {

        return view('books', [
            'books' => Book::with('author')->paginate(10),
            'title' => 'Books'
        ]);
    }
}

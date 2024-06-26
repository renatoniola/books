<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\BookStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Benchmark;

class BookController extends Component
{
    public function index(): View
    {
        // phpinfo();
        $ciao = '';
        // Benchmark::dd(fn() => Book::with('myBooks')->paginate(10));
        return view(
            'livewire.books',
            [
            'books' =>  Book::with('myBooks')->paginate(10),
            'statuses' => BookStatus::all(),
            'title' => 'Books'
            ]
        );
    }

    public function show(Book $book): View
    {

        $bookCached = Cache::remember(
            "book.{$book->book_slug}",
            5,
            function () use ($book) {
                return Book::leftJoin(
                    'authors',
                    function ($join) {
                        $join->on('books.author_id', '=', 'authors.id');
                    }
                )->where('book_slug', $book->book_slug)->first();
            }
        );

        return view(
            'livewire.book-controller',
            [
            'book' =>  $bookCached,
            ]
        );
    }

    public function myBooks(): View
    {
        // Benchmark::dd(fn() => Auth::user()->myBooks()->orderBy('books.created_at', 'DESC')->paginate(10) );
        return view(
            'livewire.books',
            [
            'books' => Auth::user()->myBooks()->orderBy('books.created_at', 'DESC')->paginate(10),
            'statuses' => BookStatus::all(),
            'title' => 'My Books'
            ]
        );
    }
}

<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\BookStatus;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use Livewire\Component;

class BookController extends Component
{
    public function index(): View
    {
        // Benchmark::dd(fn() => Book::with('myBooks')->paginate(10));
        // Debugbar::info(Book::with('myBooks')->paginate(10));

        return view(
            'livewire.books',
            [
                'books' => Book::with('author')->with('myBooks')->paginate(10),
                'statuses' => BookStatus::all(),
                'title' => 'Books',
            ]
        );
    }

    public function show(Book $book): View
    {
        $generes = $book->genre();
        $bookCached = Cache::remember(
            "book.{$book->book_slug}",
            5,
            function () use ($book) {
                return $book->leftJoin(
                    'authors',
                    function ($join) {
                        $join->on('books.author_id', '=', 'authors.id');
                    }
                )
                ->with('genre')
                ->where('book_slug', $book->book_slug)->first();
            }
        );

        return view(
            'livewire.book-controller',
            [
                'book' => $bookCached,
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
                'title' => 'My Books',
            ]
        );
    }
}

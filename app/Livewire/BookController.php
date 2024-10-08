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
use App\Filament\Resources\BookResource;

/**
 * BookController class.
 */
class BookController extends Component
{
    /**
     * Shows all books.
     * @return \Illuminate\View\View
     */
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

    /**
     * Single book show function.
     *
     * @param Book $book
     *
     * @return \Illuminate\View\View
     */
    public function show(Book $book): View
    {
        $bookCached = Cache::remember(
            "book.{$book->book_slug}",
            5,
            function () use ($book) {
                return $book->where('book_slug', $book->book_slug)->with('genres')->first();
            }
        );

        return view(
            'livewire.book',
            [
                'edit_link' => BookResource::getUrl('edit', [$book->book_slug]),
                'book' => $bookCached,
            ]
        );
    }

    /**
     * Retrives books attached to the user.
     * @return \Illuminate\View\View
     */
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

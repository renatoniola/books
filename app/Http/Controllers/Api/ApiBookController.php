<?php

namespace App\Http\Controllers\Api;

use Livewire\Component;
use App\Models\Book;
use App\Models\BookStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ApiBookController extends Component
{
    public function index(): JsonResponse
    {
        return response()->json(
            [
              'books' =>  Book::with(['author'])->paginate(10),
              'statuses' => BookStatus::all(),
            ]
        );
    }

    public function show(string $book_slug): JsonResponse
    {

        return response()->json(
            [
               'book' =>  Book::with(['author'])->where('book_slug', $book_slug)->first()
            ]
        );
    }

    public function myBooks(): JsonResponse
    {
        return response()->json(
            [
                'books' => Auth::user()->myBooks()->orderBy('books.created_at', 'DESC')->paginate(10),
            ]
        );
    }
}

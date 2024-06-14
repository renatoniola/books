<?php

namespace App\Http\Controllers\Api;

use Livewire\Component;
use App\Models\Book;
use App\Models\BookStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\JsonResponse;

class ApiBookController extends Component
{
    public function index(): JsonResponse
    {
        return response()->json(
            [
              'books' =>  Book::with('myBooks')->paginate(10),
              'statuses' => BookStatus::all(),
            ]
        );
    }

    public function show(Book $id): JsonResponse
    {
        return response()->json(
            [
               'book' =>  Book::find($id),
            ]
        );
    }
}

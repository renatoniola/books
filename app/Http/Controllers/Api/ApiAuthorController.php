<?php

namespace App\Http\Controllers\Api;

use Livewire\Component;
use App\Models\Author;
use Illuminate\Http\JsonResponse;

class ApiAuthorController extends Component
{
    public function index(): JsonResponse
    {
        return response()->json(
            [
              'authors' =>  Author::paginate(10),
            ]
        );
    }

    public function show(string $author_slug): JsonResponse
    {

        return response()->json(
            [
               'author' =>  Author::where('author_slug', $author_slug)->first()
            ]
        );
    }
}

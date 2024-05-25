<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function index(): View
    {

        return view('authors', [
            'authors' => Author::paginate(10),
            'title' => 'Authors'
        ]);
    }

    public function show(Author $author): View
    {
        return view('author', [
            'author' =>  Author::where('author_slug', $author->author_slug)->first(),
        ]);
    }

    public function myAuthors(): View
    {

        return view('authors', [
            'authors' => Auth::user()->myAuthors()->paginate(10),
            'title' => 'My authors',
        ]);
    }
}

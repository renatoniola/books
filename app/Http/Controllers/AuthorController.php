<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

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
        $authorCached = Cache::remember("author.{$author->author_slug}", 5, function () use ($author) {
            return Author::where('author_slug', $author->author_slug)->first();
        });
       
        return view('author', [
           'author' =>  $authorCached,
           'title' => 'Authors'
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

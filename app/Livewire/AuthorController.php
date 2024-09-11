<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class AuthorController extends Component
{
    public function index(): View
    {

        return view(
            'livewire.authors',
            [
            'title' => 'Authors',
            'type' => 'authors'
            ]
        );
    }

    public function show(Author $author): View
    {
        $authorCached = Cache::remember(
            "author.{$author->author_slug}",
            5,
            function () use ($author) {
                return Author::where('author_slug', $author->author_slug)->with('book')->first();
            }
        );

        return view(
            'livewire.author',
            [
            'author' =>  $authorCached,
            'title' => 'Authors'
            ]
        );
    }

    public function myAuthors()
    {
        return view(
            'livewire.authors',
            [
                'title' => 'My Authors',
                'type' => 'my-authors'
            ]
        );
    }

}

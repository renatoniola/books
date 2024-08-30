<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Author;

class BooksFromAuthor extends Component
{
    public Author $author;
    public function render()
    {
        return view('livewire.books-from-author');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Author;

class BooksFromAuthor extends Component
{
    public Author $author;
    public string $title = '';
    public int $currentBookId;

    public function render()
    {
        if ($this->title === '') {
            $this->title = "Books from {$this->author->getFullName()}";
        }
        return view('livewire.books-from-author');
    }
}

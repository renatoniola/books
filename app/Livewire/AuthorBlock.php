<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Author;

class AuthorBlock extends Component
{
    public Author $author;
    public function render()
    {
        return view('livewire.components.author-block');
    }
}

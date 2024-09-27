<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Author;
use Illuminate\View\View;

class AuthorBlock extends Component
{
    public Author $author;
    public function render(): View
    {
        return view('livewire.components.author-block');
    }
}

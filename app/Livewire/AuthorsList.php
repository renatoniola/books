<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthorsList extends Component
{
    public function render()
    {
        return view(
            'livewire.authors-list',
            [
            'authors' => Auth::user()->myAuthors()->paginate(10),
            'title' => 'My authors',
            ]
        );
    }
}

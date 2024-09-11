<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Models\Author;

class AuthorsList extends Component
{
    use WithPagination;

    protected $listeners = ['clicked' => '$refresh'];

    public string $type = '';
    public string $title = '';

    public function mount($type, $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    public function render()
    {
        $ciao = '';
        if ($this->type === 'authors') {
            $authors = Author::paginate(10);
        } else {
            $authors = Auth::user()->myAuthors()->paginate(10);
        }

        return view(
            'livewire.authors-list',
            [
                'authors' => $authors,
                'title' => $this->title,
            ]
        );
    }
}

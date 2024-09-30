<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Models\Author;
use Illuminate\View\View;

class AuthorsList extends Component
{
    use WithPagination;

    /**
     *  @var array<string> $listeners
     **/
    protected $listeners = ['clicked' => '$refresh'];

    public string $type = '';
    public string $title = '';
    /**
     * Mount event.
     * @param string $type
     * @param string $title
     * @return void
     */
    public function mount(string $type, string $title): void
    {
        $this->type = $type;
        $this->title = $title;
    }

    /**
     * Render function.
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
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

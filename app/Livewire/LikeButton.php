<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

class LikeButton extends Component
{
    public Author $author;
    public string $route;

    public function mount(): void
    {
        $this->route = Route::getCurrentRoute()->uri;
    }

    public function toggleLike(): void
    {

        if ($this->route === 'my-authors') {
            $this->dispatch('clicked');
        }

        if (auth()->guest()) {
            $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        if ($user->hasLiked($this->author)) {
            $user->likes()->detach($this->author);
            return;
        } else {
            $user->likes()->attach($this->author);
        }
    }

    public function render(): View
    {
        return view('livewire.components.like-button');
    }
}

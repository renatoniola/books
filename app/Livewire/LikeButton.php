<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Component;
use Illuminate\View\View;

class LikeButton extends Component
{
    public Author $author;

    public function toggleLike()
    {
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        if ($user->hasLiked($this->author)) {
            $user->likes()->detach($this->author);
            return;
        }

        $user->likes()->attach($this->author);
    }

    public function render(): View
    {
        return view('livewire.like-button');
    }
}

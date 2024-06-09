<?php

namespace App\Livewire;

use App\Models\UserAuthor;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class LikeButton extends Component
{
    public bool $onOff;
    public int $authorId;

    public function mount(): void
    {
        $this->onOff = false;
    }

    public function render(): View
    {
        return view('livewire.like-button');
    }

    public function onClickHandler($authorId): void
    {
        $data =  [
            'user_id' => Auth::user()->id,
            'author_id' => $authorId,
        ];
        // dd($this->onOff, $authorId);
        if (!$this->onOff) {
            UserAuthor::create($data);
        } else {
            UserAuthor::where('user_id', Auth::user()->id)->where('author_id', $authorId)->delete();
        }
        $this->onOff = !$this->onOff;
    }
}

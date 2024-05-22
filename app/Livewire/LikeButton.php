<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class LikeButton extends Component
{
    public bool $onOff;

    public function mount(): void
    {
        $this->onOff = false;
    }

    public function render(): View
    {
        return view('livewire.like-button');
    }

    public function onClickHandler(): void
    {
        $this->onOff = !$this->onOff;
    }
}

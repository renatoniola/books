<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{

    public $onOff;

    public function mount()
    {
        $this->onOff = FALSE;
    }

    public function render()
    {
        return view('livewire.like-button');
    }

    public function onClickHandler () {
        $this->onOff = !$this->onOff;
    }
}

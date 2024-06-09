<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class Header extends Component
{
    public function mount(): void
    {
    }

    public function render(): View
    {
        return view('livewire.header');
    }
}

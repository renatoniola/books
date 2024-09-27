<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class Breadcrumbs extends Component
{
    public string $title;
    public string $collectionPath;
    public string $collectionTitle;

    public function render(): View
    {
        return view('livewire.components.breadcrumbs');
    }
}

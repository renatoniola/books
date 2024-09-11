<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public string $title;
    public string $collectionPath;
    public string $collectionTitle;

    public function render()
    {
        return view('livewire.components.breadcrumbs');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class ProductsMenu extends Component
{
    public string $slug;
    public string $route;

    public function render(): View
    {
        return view('livewire.products-menu');
    }
}

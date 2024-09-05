<?php

namespace App\Livewire;

use Livewire\Component;

class ProductsMenu extends Component
{
    public string $slug;
    public string $route;

    public function render()
    {
        return view('livewire.products-menu');
    }
}

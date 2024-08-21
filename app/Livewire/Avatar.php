<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use App\Models\Author;
use Illuminate\Support\Facades\Vite;

class Avatar extends Component
{
    public Author $author;
    public string $url;
    private string $image;
    public string $styles;

    public function render(): View
    {
        $this->image = ['avatar-f.webp','avatar-m.png'][rand(0, 1)];

        $this->url =
            file_exists('storage/' . $this->author->author_image_path) ?
            '/storage/' . $this->author->author_image_path :
            Vite::image("{$this->image}");
        return view('livewire.avatar');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use App\Models\Author;

class Avatar extends Component
{
    public Author $author;
    public string $url;
    private array $avatarImages;
    public string $styles;

    public function render(): View
    {
        $this->avatarImages = ['/assets/images/avatar-f.webp','/assets/images/avatar-m.png'];

        $this->url =
            file_exists('storage/' . $this->author->author_image_path) ?
            '/storage/' . $this->author->author_image_path :
            $this->avatarImages[rand(0, 1)];
        return view('livewire.avatar');
    }
}

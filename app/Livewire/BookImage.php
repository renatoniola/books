<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Support\Facades\Vite;

class BookImage extends Component
{
    public Book $book;
    public string $url;
    public string $styles;

    public function render(): View
    {
        $this->url =
            file_exists('storage/' . $this->book->book_image_path) ?
            '/storage/' . $this->book->book_image_path :
            Vite::image("books.jpg");
        return view('livewire.book-image');
    }
}
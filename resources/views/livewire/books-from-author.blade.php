<div class="flex flex-col pt-8 pb-8 mt-10 border-y-2 border-y-zinc-100">
    <h3>
        @if ($title)
            {{ $title }}
        @endif

    </h3>
    <div class="flex mt-4">
        @foreach ($author->book as $book)
            @if ($currentBookId && $currentBookId == $book->id)
                @continue
            @endif
            <div class="mr-3">
                <a wire:navigate href="{{ route('book', $book->book_slug) }}">

                    @livewire('book-image', [
                        'book' => $book,
                        'styles' => 'h-36 rounded-md shadow-lg',
                    ])
                </a>
            </div>
        @endforeach
    </div>
</div>

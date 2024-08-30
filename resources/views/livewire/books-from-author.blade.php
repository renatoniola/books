<div class="flex flex-col pt-8 pb-8 mt-10 border-y-2 border-y-zinc-100">
    <h3>Books from {{ $author->getFullName() }}</h3>
    <div class="flex mt-4">
        @foreach ($author->book as $book)
        <div class="mr-3">
            <a wire:navigate href="{{ route('book', $book->book_slug) }}">
                <img class="h-36 rounded-md" src="{{ asset('storage/' . $book->book_image_path) }}"
                    alt="{{ $book->book_title }}" />
            </a>
        </div>
        @endforeach
    </div>
</div>
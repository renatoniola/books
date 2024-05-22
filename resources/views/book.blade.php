
<x-layout :title="$book->book_title">
    <div class="mx-auto">
        <div class="mx-auto flex max-w-7xl p-6 flex-col">
            <img class="h-12 w-12 object-cover rounded-full bg-gray-50" src="{{ asset('storage/' . $book->book_image_path) }}" alt="{{ $book->book_title }}"/>
            <h1>{{ $book->book_title }}</h1>
            <p>{{ $book->author_id }}</p>
            <p>{{ $book->book_descr }}</p>
        </div>
    </div>
</x-layout>
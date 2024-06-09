<x-layout :title="$book->book_title">
  
    <div class="mx-auto flex flex-row flex-wrap py-4 max-w-7xl mt-12">
        <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
            <div class="sticky top-0 bg-white rounded-xl w-full">
                <img class="w-60 object-cover rounded-md bg-gray-50" src="{{ asset('storage/' . $book->book_image_path) }}" alt="{{ $book->book_title }}"/>
                <p class="mt-2 mb-3 text-sm leading-6 text-gray-900">Published: {{ $book->book_year_published > 0 ? $book->book_year_published : '----' }}</p>
                @if (!Auth::guest()) 
                @livewire('status-button',
                [
                'status' => !empty($book->myBooks[0]->pivot->book_status) ? $book->myBooks[0]->pivot->book_status : 0,
                'book_id' => $book->id
                ])
                @endif
            </div>
        </aside>
        <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
            <h1 >{{ $book->book_title }}</h1>
            <p class="text-gray-600" >By: 
                <a href="{{ route('author', $book->author->author_slug) }}">{{ $book->author->getFullName() }}</a>
            </p>
            
            <p class="mt-5">{{ $book->book_descr }}</p>
            
        </main>
    </div>

</x-layout>
<x-layout :title="$book->book_title">

    <div x-data="{
        currentMenuItem: '' ,
        cssClass: '',
        toggle (menuName) {
           if (menuName === this.currentMenuItem ) {
              return 0;
           } else {
              return menuName;
            }
           
        }
    }" class="mx-auto flex flex-row flex-wrap py-4 max-w-7xl mt-12">
        <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
            <div class="sticky top-0 bg-white rounded-xl w-full">

                @livewire('book-image',[
                'book' => $book,
                'styles' => 'w-60 object-cover rounded-md bg-gray-50 shadow-lg'
                ])
                <p class="mt-2 mb-3 text-sm leading-6 text-gray-900">Published: {{ $book->book_year_published > 0 ?
                    $book->book_year_published : '----' }}</p>
                @if (!Auth::guest())
                @livewire('status-button',
                [
                'status' => !empty($book->myBooks[0]->pivot->book_status) ? $book->myBooks[0]->pivot->book_status : 0,
                'book_id' => $book->id,
                'position' => 'left',
                ])
                @endif
            </div>
        </aside>
        <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
            @livewire('breadcrumbs',
            [
            'collectionPath' => route('all-books'),
            'collectionTitle' => 'Books',
            'title' => $book->book_title
            ]
            )
            <div class="flex justify-between">
                <h1 class="mb-5">{{ $book->book_title }}</h1>
                @if (!Auth::guest() && Auth::user()->isAdmin())
                @livewire('products-menu', [
                'slug' => $book->book_slug,
                'route' => 'filament.admin.resources.books.edit'
                ])
                @endif
            </div>
            <p class="text-gray-600">By:
                <a class="text-xl" wire:navigate href="{{ route('author', $book->author->author_slug) }}">{{
                    $book->author->getFullName() }}</a>
            </p>

            <p class="mt-5">{!! $book->book_descr !!}</p>
            <div class="mt-5">
                Genres: @foreach ($book->genres as $gen)
                <span class="mr-1 font-semibold">{{ $gen->genre }}</span>
                @endforeach
            </div>
        </main>
    </div>

</x-layout>
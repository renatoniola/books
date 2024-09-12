<x-layout :title="$author->getFullName()">

    <div class="mx-auto flex flex-row flex-wrap py-4 max-w-7xl mt-12">
        <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
            <div class="sticky top-0 bg-white w-full">
                @livewire('avatar',[
                'author' => $author,
                'styles' => 'w-60 object-cover rounded-md bg-gray-50'
                ])
            </div>
        </aside>
        <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
            @livewire('breadcrumbs',
            [
            'collectionPath' => route('all-authors'),
            'collectionTitle' => 'Authors',
            'title' => $author->getFullName()
            ]
            )
            <div class="flex justify-between">
                <h1>{{ $author->getFullName() }}</h1>
                <div class="flex items-center">
                    @if (!Auth::guest())
                    @livewire('like-button',
                    [
                    'author' => $author
                    ]
                    )
                    @endif

                    @if (!Auth::guest() && Auth::user()->isAdmin())
                    @livewire('products-menu', [
                    'slug' => $author->author_slug,
                    'route' => 'filament.admin.resources.authors.edit'
                    ])
                    @endif
                </div>
            </div>

            <p class="mt-10">
                @if ($author->author_descr)
                {!! $author->author_descr !!}
                @else
                No bio found
                @endif
            </p>
            @livewire('books-from-author',
            [
            'author' => $author
            ]
            )
        </main>
    </div>

</x-layout>
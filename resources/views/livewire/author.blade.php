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
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            @livewire('books-from-author',
            [
            'author' => $author
            ]
            )
        </main>
    </div>

</x-layout>
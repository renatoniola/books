<div class="mx-auto">
  <div class="mx-auto flex max-w-7xl p-6 flex-col">
    @livewire('breadcrumbs',
    [
    'title' => $title
    ]
    )
    <h1>{{ $title }}</h1>
    <ul role="list" class="divide-y divide-gray-100 w-full">
      @foreach ($authors as $author)
      <li class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
          @livewire('avatar',[
          'author' => $author,
          'styles' => 'h-12 w-12 flex-none object-cover rounded-full bg-gray-50'
          ], key('avatar' . $author->id))
          
          <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900"><a wire:navigate
                href="{{ route('author', $author->author_slug) }}">{{ $author->getFullName() }}</a></p>
          </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
          <p class="mt-1 text-xs leading-5 text-gray-500">
            @if (!Auth::guest())
            @livewire('like-button',
            [
            'author' => $author
            ], 
            key('like-button' . $author->id)
            )
            @endif
          </p>
        </div>
      </li>
      @endforeach
    </ul>
    {{ $authors->links() }}
  </div>
</div>
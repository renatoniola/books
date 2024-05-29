<ul role="list" class="divide-y divide-gray-100 w-full">
  @foreach ($authors as $author)
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none object-cover rounded-full bg-gray-50" src="{{ asset('storage/' . $author->author_image_path) }}" alt="{{ $author->author_name }} {{ $author->author_lastname }}">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900"><a href="{{ route('author', $author->author_slug) }}">{{ $author->getFullName() }}</a></p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <p class="mt-1 text-xs leading-5 text-gray-500">

      @livewire('like-button')
      </p>
    </div>
  </li>
  @endforeach
</ul>

{{ $authors->links() }}
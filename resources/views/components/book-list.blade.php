<ul role="list" class="divide-y divide-gray-100 w-full">
  @foreach ($books as $book)
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none object-cover rounded-full bg-gray-50" src="{{ asset('storage/' . $book->book_image_path) }}" alt="{{ $book->book_title }}">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $book->book_title }}</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">By: {{ $book->author->author_name }} {{ $book->author->author_lastname }}</p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <p class="text-sm leading-6 text-gray-900">Published: {{ $book->book_year_published > 0 ? $book->book_year_published : 'N/A' }}</p>
      <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
  @endforeach
</ul>

{{ $books->links() }}
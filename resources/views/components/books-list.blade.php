<ul x-data="{
  currentMenuItem: '' ,
  cssClass: '',
  toggle (menuName) {
     if (menuName === this.currentMenuItem ) {
        return 0;
     } else {
        return menuName;
      }
     
  }}" role="list" class="divide-y divide-gray-100 w-full">
  @foreach ($books as $book)
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      @livewire('book-image',[
      'book' => $book,
      'styles' => 'max-w-16 flex-none object-cover rounded-md bg-gray-50 shadow-lg border-2'
      ])
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900"><a wire:navigate
            href="{{ route('book', $book->book_slug) }}">{{ $book->book_title }}</a></p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">By: <a wire:navigate
            href="{{ route('author', $book->author->author_slug) }}">{{ $book->author->getFullName() }}</a></p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">

      <p class="text-sm leading-6 text-gray-900">Published: {{ $book->book_year_published > 0 ?
        $book->book_year_published : '----' }}</p>
      <p class="mt-1 text-xs leading-5 text-gray-500">
        @if (!Auth::guest())
        @livewire('status-button',
        [
        'status' => !empty($book->myBooks[0]->pivot->book_status) ? $book->myBooks[0]->pivot->book_status : 0,
        'statuses' => $statuses,
        'book_id' => $book->id
        ])
        @endif

      </p>
    </div>
  </li>
  @endforeach
</ul>
{{ $books->links() }}
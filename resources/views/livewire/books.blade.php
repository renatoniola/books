<x-layout :title="$title">
    <div class="mx-auto">
        <div class="mx-auto flex max-w-7xl p-6 flex-col">
            <x-books-list :books="$books" :statuses="$statuses"></x-books-list>
        </div>
    </div>
</x-layout>
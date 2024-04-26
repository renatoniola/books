<x-layout :title="$title">
    <div class="mx-auto">
        <div class="mx-auto flex max-w-7xl p-6 flex-col">
            <x-book-list :books="$books" :statuses="$statuses"></x-book-list>
        </div>
    </div>
</x-layout>
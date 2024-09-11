<x-layout :title="$title">
    @livewire('authors-list', [
       'type' => $type,
       'title' => $title
    ]
    )
</x-layout>
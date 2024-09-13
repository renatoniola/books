<div class="py-8 flex border-b-2 border-b-zinc-100">
    
    @livewire('avatar', [
        'author' => $author,
        'styles' => 'w-28 h-28 object-cover rounded-full bg-gray-50',
    ])
    <div class="ml-8">
        <h4>About the author:</h4>
        <h3>{{ $author->getFullName() }}</h3>
        <p class="mt-3">{!! $author->author_excerpt !!}</p>
    </div>
    
</div>
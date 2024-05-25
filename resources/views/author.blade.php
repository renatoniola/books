
<x-layout :title="$author->getFullName()">
  
    <div class="mx-auto flex flex-row flex-wrap py-4 max-w-7xl mt-12">
        <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
            <div class="sticky top-0 bg-white rounded-xl w-full">
                <img class="w-60 object-cover rounded-md bg-gray-50" src="{{ asset('storage/' . $author->author_image_path) }}" alt="{{ $author->getFullName()}}"/>
            </div>
        </aside>
        <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
            <h1 >{{ $author->getFullName() }}</h1>
            
        </main>
    </div>

</x-layout>
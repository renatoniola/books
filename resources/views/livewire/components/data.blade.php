<div
    class="flex flex-col w-1/3 mt-12 py-9 px-4 rounded shadow bg-gray-100 gap-x-1.5 rounded-md bg-white text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
    <div class="flex justify-between w-full mb-9">

        <div class="flex flex-col flex-1 items-center">
            <span class="text-2xl font-semibold">{{ $usersCount }}</span>
            <span class="text-gray-500">Users count</span>
        </div>

        <div class="flex flex-col flex-1 items-center">
            <span class="text-2xl font-semibold">{{ $booksCount }}</span>
            <span class="text-gray-500">Total books count</span>
        </div>

    </div>

    <div class="flex justify-between w-full mb-9">

        <div class="flex flex-col  flex-1 items-center">
            <span class="text-2xl font-semibold">{{ $authorsCount }}</span>
            <span class="text-gray-500">Total authors count</span>
        </div>
        <div class="flex flex-col  flex-1 items-center">
            @if (!Auth::guest())
                <span class="text-2xl font-semibold">{{ $myBooksCount }}</span>
                <span class="text-gray-500">my books</span>
            @endif
        </div>

    </div>

    <div class="flex justify-between w-full mb-9">
        @if (!Auth::guest())
            <div class="flex flex-col items-center">
                <span class="text-2xl font-semibold">{{ $myAuthorsCount }}</span>
                <span class="text-gray-500">my authors count</span>
            </div>
        @endif

    </div>
</div>

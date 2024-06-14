<header class="bg-white">
  <nav x-data="{ 
    currentMenu: '' ,
    toggle (menuName) {
       if (menuName === this.currentMenu ) {
          return '';
       } else {
        return menuName;
        }
       
    }  
    }" class="mx-auto flex max-w-7xl items-center justify-between pt-6 pb-6 lg:px-8" aria-label="Global">
    <div class="flex">
      <a wire:navigate href="{{ route('dashboard') }}" class="flex -m-1.5 p-1.5">
        <span class="sr-only">BOOKS</span>
        <img class="h-8 w-8" src="{{ Vite::asset('resources/images/books.png') }}">
        <div class="ml-6 p-1.5">BOOKS</div>
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12 ml-10">
      <div class="relative">
        <button x-on:click=" currentMenu = toggle('books') " type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
          Books
          <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <div 
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 translate-y-1"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 translate-y-1"
           x-show="currentMenu === 'books'" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
          <div class="p-4">


            @auth
            <x-menu-element title="My books" undertitle="My books" routename="my-books"></x-menu-element>
            @endauth
            <x-menu-element title="All books" undertitle="All books" routename="all-books"></x-menu-element>

          </div>

        </div>
      </div>

      <div class="relative">
        <button x-on:click="currentMenu = toggle('authors')" type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
          Authors
          <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>

        <div 
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1"
        
           x-show="currentMenu === 'authors'" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
          <div class="p-4">

            <x-menu-element title="All authors" undertitle="All authors" routename="all-authors"></x-menu-element>
            @auth
            <x-menu-element title="My authors" undertitle="My favourite authors" routename="my-authors"></x-menu-element>
            @endauth
            
          </div>
        </div>
      </div>

    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      @if (Auth::guest())
      <a href="/admin/login" class="text-sm font-semibold leading-6 text-gray-900">
        Log in <span aria-hidden="true">&rarr;</span></a>
      @else
      <span class="text-sm font-semibold leading-6 text-gray-900">{{ Auth::user()->name }} ({{ Auth::user()->email }})</span>

      <form action="/admin/logout" method="post">
        @csrf
        <button type="submit" class="text-sm font-semibold leading-6 text-gray-900">Logout</button>
      </form>
      @endif

    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="flex -m-1.5 p-1.5">
          <span class="sr-only mr-8">Books</span>
         <img class="h-8 w-8" src="{{ Vite::asset('resources/images/books.png') }}">Books
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Books
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <div class="mt-2 space-y-2" id="disclosure-1">
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">My books</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">All books</a>

              </div>
            </div>
           
          </div>

          <div>
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Authors
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <div class="mt-2 space-y-2" id="disclosure-1">
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">My authors</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">All authors</a>

              </div>
            </div>
           
          </div>

          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
          </div>
        </div>

        
      </div>
    </div>
  </div>
</header>
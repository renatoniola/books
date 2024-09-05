<div x-data="{
    editOpenVar: false,
        editOpen () {
            if (this.editOpenVar) {
                return false;
            } else {
                return true;
            }
        }
    }" class="relative">
    <button x-on:click=" editOpenVar = editOpen() ">
        <svg fill="#777777" viewBox="0 0 256 256" class="w-6 h-6 mt-2" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M128,24A104,104,0,1,0,232,128,104.12041,104.12041,0,0,0,128,24ZM80,140a12,12,0,1,1,12-12A12.0006,12.0006,0,0,1,80,140Zm48,0a12,12,0,1,1,12-12A12.0006,12.0006,0,0,1,128,140Zm48,0a12,12,0,1,1,12-12A12.0006,12.0006,0,0,1,176,140Z" />
        </svg>
    </button>
    <div x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-10" x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 z-10 mt-0 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none px-4 py-2 text-sm"
        x-show="editOpenVar">
        <a href="{{ route($route, [$slug])}}">edit</a>
    </div>
</div>
<x-layout :title="$title">
    <div class="mx-auto py-4 max-w-7xl lg:px-8">
        @livewire('breadcrumbs', [
            'title' => 'Dashboard',
        ])
        <h1>Dashboard</h1>
        @livewire('data')
    </div>
</x-layout>

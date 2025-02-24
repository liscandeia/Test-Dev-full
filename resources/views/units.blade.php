<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Unidades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('create-unit')
                @livewire('unit-list')
                @livewire('delete-unit')
                @livewire('view-unit')
                @livewire('edit-unit')

            </div>
        </div>
    </div>
</x-app-layout>

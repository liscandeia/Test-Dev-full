<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Colaboradores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('create-employee')
                @livewire('employee-list')
                @livewire('delete-employee')
                @livewire('view-employee')
                @livewire('edit-employee')

            </div>
        </div>
    </div>
</x-app-layout>

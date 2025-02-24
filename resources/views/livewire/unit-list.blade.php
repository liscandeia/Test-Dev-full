<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bandeira
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Grupo
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <x-input class="w-full" wire:model.live='search' placeholder="pesquisar"></x-input>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Units as $unit )
                <tr
                    class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $unit->fantasy_name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $unit->flag->name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $unit->flag->group->name }}
                    </th>

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="flex flex-row space-x-6">
                            <x-button @click="$dispatch('delete-unit-event',{id:'{{ $unit->id }}'})" class="m-1 bg-red-700"> <i class="fa-solid fa-trash"></i> </x-button>
                            <x-button @click="$dispatch('edit-unit-event',{id:'{{ $unit->id }}'})" class="m-1 bg-yellow-600"><i class="fa-solid fa-pen-to-square"></i></x-button>
                             <x-button @click="$dispatch('view-unit-event',{id:'{{ $unit->id }}'})" class="m-1 bg-sky-700"> <i class="fa-solid fa-eye"></i> </x-button>
                        </div>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$Units->links()}}
    </div>
    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>&copy vochtech
</div>



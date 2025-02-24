<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CPF
                    </th>
                    <th scope="col" class="px-6 py-3">
                        E-mail
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Unidade
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bandeira
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Grupo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <x-button wire:click="exportExcel" class="ml-4 bg-yellow-600 hover:bg-yellow-700">Exportar Excel</x-button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Employees as $employee )
                <tr
                    class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $employee->name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $employee->cpf}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $employee->email}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $employee->unit->fantasy_name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $employee->unit->flag->name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $employee->unit->flag->group->name }}
                    </th>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{$Employees->links()}}
    </div>
    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>&copy vochtech
</div>



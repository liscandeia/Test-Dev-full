<div>
    <x-dialog-modal wire:model.live="showForm" >
        <x-slot name="title">
            Visualizar Unidade
        </x-slot>

        <x-slot name="content">
            <div class="overflow-x-auto">
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
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Grupo econômico
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bandeira
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Unidade
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Criação
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Última edição
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeName }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeCPF }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeEmail }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeGroup }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeFlag }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeUnit }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeCreate }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $employeeUpdate }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('showForm', false)" wire:loading.attr="disabled">
                {{ __('Fechar') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
</div>

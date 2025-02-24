<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white dark:bg-gray-800">
        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Usuário
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ação
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo de Alteração
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Data
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($audits as $audit)
                    <tr class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $audit->user->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $audit->event }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $audit->auditable_type }}
                        </td>
                        <td class="px-6 py-4 text-center font-medium text-gray-900 dark:text-white">
                            {{ $audit->created_at->format('d/m/Y H:i') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $audits->links() }}
        </div>
    </div>

    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>&copy; VochTech</p>
    </footer>
</div>

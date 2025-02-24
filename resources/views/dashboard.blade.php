<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagina Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-yellow-600 text-white text-center py-9">
                    <h1 class="text-4xl">Bem-vindo ao sistema de gestão VOCH TECH</h1>
                </div>

                <!-- Seção de Destaques -->
                <div class="mt-8 py-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-700">Relatório</h3>
                            <x-button class="mt-4 bg-yellow-600">Ver Mais</x-button>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-700">Auditoria:</h3>
                            <x-button class="mt-4 bg-yellow-600">Ver Mais</x-button>
                        </div>
                    </div>
                </div>

                <!-- Tabela de Dados Recentes -->
                <div class="mt-8 text-center">
                    <div class="py-4 sm:rounded-md bg-gray-900">
                        <h2 class="text-2xl font-semibold text-white">Dados Recentes</h2>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nome</th>
                                    <th scope="col" class="px-6 py-3">Data de Criação</th>
                                    <th scope="col" class="px-6 py-3">Última Edição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">Exemplo 1</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">01/01/2025</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">10/01/2025</td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">Exemplo 2</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">02/01/2025</td>
                                    <td class="px-6 py-4 text-gray-900 dark:text-white">12/01/2025</td>
                                </tr>
                                <!-- Mais linhas -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="bg-gray-900 text-white ">
                    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex flex-col md:flex-row items-center md:justify-between">
                        <div class="flex flex-col items-center md:items-start">
                            <x-application-mark class="h-40 w-auto mb-4" />
                        </div>
                        <div class="text-center md:text-left mt-6 md:mt-0">
                            <p class="flex items-center justify-center md:justify-start text-gray-300">
                                <i class="fa fa-envelope text-yellow-400 mr-2"></i>
                                <a href="mailto:email@example.com" class="underline hover:text-yellow-400 transition">email@example.com</a>
                            </p>
                            <p class="flex items-center justify-center md:justify-start mt-2 text-gray-300">
                                <i class="fa fa-phone text-yellow-400 mr-2"></i> (61) 1234-5678
                            </p>
                            <p class="flex items-center justify-center md:justify-start mt-2 text-gray-300">
                                <i class="fa-brands fa-facebook text-yellow-400 mr-2"></i> vochtech15
                            </p>
                            <p class="flex items-center justify-center md:justify-start mt-2 text-gray-300">
                                <i class="fa-brands fa-instagram text-yellow-400 mr-2"></i> vochtech15
                            </p>

                        </div>

                        <!-- Endereço e Mapa à direita -->
                        <div class="flex flex-col items-center md:items-end mt-6 md:mt-0 text-center justify-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d358453.555710946!2d-48.52774984768387!3d-15.720755478436367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3d18df9ae275%3A0x738470e469754a24!2zQnJhc8OtbGlhLCBERg!5e1!3m2!1spt-BR!2sbr!4v1740373450766!5m2!1spt-BR!2sbr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class='rounded-lg shadow-lg mt-3'></iframe>
                            <p class="flex items-center text-center text-gray-300">
                                <i class="fa fa-map-marker-alt text-yellow-400 mr-1"></i> VochTech, Brasília, DF, Brasil
                            </p>
                        </div>

                    </div>
                </footer>
</x-app-layout>

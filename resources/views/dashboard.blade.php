<x-app-layout class="min-h-screen flex flex-col">
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    <!-- Conteúdo principal -->
    <div class="py-10 bg-gray-100 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-lg shadow-lg p-10 text-center">
                <h1 class="text-4xl font-bold">Bem-vindo ao sistema de gestão VOCH TECH</h1>
                <p class="mt-2 text-lg">Nosso sistema oferece as melhores ferramentas para você gerenciar seu negócio com eficiência e praticidade.</p>
            </div>

            <div class="mt-10 grid gap-8 grid-cols-1 sm:grid-cols-2">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800">Relatório</h3>
                    <p class="mt-2 text-gray-600">Acesse relatórios detalhados dos funcionários.</p>
                    <a href="{{ route('employee-report') }}" class="inline-block mt-4 bg-yellow-600 text-white px-5 py-2 rounded hover:bg-yellow-700 transition-colors duration-300">
                        {{ __('Ver Mais') }}
                    </a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800">Auditoria</h3>
                    <p class="mt-2 text-gray-600">Confira os registros e mantenha a transparência.</p>
                    <a href="{{ route('audit') }}" class="inline-block mt-4 bg-yellow-600 text-white px-5 py-2 rounded hover:bg-yellow-700 transition-colors duration-300">
                        {{ __('Ver Mais') }}
                    </a>
                </div>
            </div>

            <!-- Seção de Estatísticas Rápidas -->
            <div class="mt-12 mb-12 bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Estatísticas Rápidas</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-4 rounded-lg shadow">
                        <p class="text-xl font-bold text-yellow-600">{{ $activeEmployees }}</p>
                        <p class="text-gray-600">Colaboradores Ativos</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow">
                        <p class="text-xl font-bold text-yellow-600">{{ $activeUnits }}</p>
                        <p class="text-gray-600">Unidades Ativas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer sempre no final -->
    <footer class="bg-gray-900 text-white mt-auto">
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
            <div class="flex flex-col items-center md:items-end mt-6 md:mt-0 text-center justify-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d358453.555710946!2d-48.52774984768387!3d-15.720755478436367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3d18df9ae275%3A0x738470e469754a24!2zQnJhc8OtbGlhLCBERg!5e1!3m2!1spt-BR!2sbr!4v1740373450766!5m2!1spt-BR!2sbr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg mt-3"></iframe>
                <p class="flex items-center text-center text-gray-300">
                    <i class="fa fa-map-marker-alt text-yellow-400 mr-1"></i> VochTech, Brasília, DF, Brasil
                </p>
            </div>
        </div>
    </footer>
</x-app-layout>

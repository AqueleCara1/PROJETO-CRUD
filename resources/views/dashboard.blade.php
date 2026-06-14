<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- CARD PARA RESUMO -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

                <!-- CARD DE PRODUTOS -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Total de Produtos</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">
                                {{ \App\Models\Produto::count() }}
                            </p>
                        </div>
                        <div class="text-4xl">📦</div>
                    </div>
                    <a href="{{ route('produtos.index') }}"
                        class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded">
                        Gerenciar Produtos
                    </a>
                </div>

                <!-- CARD DOS CLIENTES -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Total de Clientes</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">
                                {{ \App\Models\Cliente::count() }}
                            </p>
                        </div>
                        <div class="text-4xl">👥</div>
                    </div>
                    <a href="{{ route('clientes.index') }}"
                        class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white text-sm font-medium py-2 px-4 rounded">
                        Gerenciar Clientes
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
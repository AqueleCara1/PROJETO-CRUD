<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Visualizar Cliente
            </h2>
            <a href="{{ route('clientes.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded">
                ← Voltar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Código</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $cliente->codigo }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Nome</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $cliente->nome }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Fantasia</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $cliente->fantasia ?? '-' }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Documento</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $cliente->documento ?? '-' }}</p>
                    </div>

                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Endereço</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $cliente->endereco ?? '-' }}</p>
                    </div>

                </div>

                <div class="mt-6 flex gap-3">
                    <a href="{{ route('clientes.edit', $cliente) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded">
                        Editar
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
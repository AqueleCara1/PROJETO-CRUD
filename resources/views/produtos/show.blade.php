<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Visualizar Produto
            </h2>
            <a href="{{ route('produtos.index') }}"
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
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $produto->codigo }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Descrição</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $produto->descricao }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Código de Barras</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $produto->codigo_barras ?? '-' }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Valor de Venda</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">R$ {{ number_format($produto->valor_venda, 2, ',', '.') }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Peso Bruto</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $produto->peso_bruto ? number_format($produto->peso_bruto, 3, ',', '.') . ' kg' : '-' }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Peso Líquido</p>
                        <p class="text-lg font-medium text-gray-800 dark:text-white">{{ $produto->peso_liquido ? number_format($produto->peso_liquido, 3, ',', '.') . ' kg' : '-' }}</p>
                    </div>

                </div>

                <div class="mt-6 flex gap-3">
                    <a href="{{ route('produtos.edit', $produto) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded">
                        Editar
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
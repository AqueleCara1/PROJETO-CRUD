<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Produtos
            </h2>
            <a href="{{ route('produtos.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                + Novo Produto
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Mensagem de sucesso --}}
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Código</th>
                            <th class="px-6 py-3">Descrição</th>
                            <th class="px-6 py-3">Cód. Barras</th>
                            <th class="px-6 py-3">Valor Venda</th>
                            <th class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produtos as $produto)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $produto->codigo }}</td>
                            <td class="px-6 py-4">{{ $produto->descricao }}</td>
                            <td class="px-6 py-4">{{ $produto->codigo_barras ?? '-' }}</td>
                            <td class="px-6 py-4">R$ {{ number_format($produto->valor_venda, 2, ',', '.') }}</td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('produtos.show', $produto) }}"
                                    class="bg-gray-500 hover:bg-gray-600 text-white py-1 px-3 rounded text-xs">
                                    Ver
                                </a>
                                <a href="{{ route('produtos.edit', $produto) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-xs">
                                    Editar
                                </a>
                                <form action="{{ route('produtos.destroy', $produto) }}" method="POST"
                                    onsubmit="return confirm('Deseja excluir este produto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center">Nenhum produto cadastrado.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Paginação --}}
                <div class="px-6 py-4">
                    {{ $produtos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
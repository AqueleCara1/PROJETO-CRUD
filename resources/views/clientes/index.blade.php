<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Clientes
            </h2>
            <a href="{{ route('clientes.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded">
                + Novo Cliente
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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
                            <th class="px-6 py-3">Nome</th>
                            <th class="px-6 py-3">Fantasia</th>
                            <th class="px-6 py-3">Documento</th>
                            <th class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clientes as $cliente)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $cliente->codigo }}</td>
                            <td class="px-6 py-4">{{ $cliente->nome }}</td>
                            <td class="px-6 py-4">{{ $cliente->fantasia ?? '-' }}</td>
                            <td class="px-6 py-4">{{ $cliente->documento ?? '-' }}</td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('clientes.show', $cliente) }}"
                                    class="bg-gray-500 hover:bg-gray-600 text-white py-1 px-3 rounded text-xs">
                                    Ver
                                </a>
                                <a href="{{ route('clientes.edit', $cliente) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-xs">
                                    Editar
                                </a>
                                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST"
                                    onsubmit="return confirm('Deseja excluir este cliente?')">
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
                            <td colspan="5" class="px-6 py-4 text-center">Nenhum cliente cadastrado.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="px-6 py-4">
                    {{ $clientes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Editar Produto
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

                <form action="{{ route('produtos.update', $produto) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Código *</label>
                            <input type="number" name="codigo" value="{{ old('codigo', $produto->codigo) }}"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('codigo') border-red-500 @enderror">
                            @error('codigo')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Descrição * <span class="text-gray-400 text-xs">(máx. 60 caracteres)</span></label>
                            <input type="text" name="descricao" value="{{ old('descricao', $produto->descricao) }}" maxlength="60"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('descricao') border-red-500 @enderror">
                            @error('descricao')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Código de Barras <span class="text-gray-400 text-xs">(máx. 14 caracteres)</span></label>
                            <input type="text" name="codigo_barras" value="{{ old('codigo_barras', $produto->codigo_barras) }}" maxlength="14"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('codigo_barras') border-red-500 @enderror">
                            @error('codigo_barras')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Valor de Venda *</label>
                            <input type="text" name="valor_venda" value="{{ old('valor_venda', $produto->valor_venda) }}"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('valor_venda') border-red-500 @enderror">
                            @error('valor_venda')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Peso Bruto (kg)</label>
                            <input type="text" name="peso_bruto" value="{{ old('peso_bruto', $produto->peso_bruto) }}"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('peso_bruto') border-red-500 @enderror">
                            @error('peso_bruto')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Peso Líquido (kg)</label>
                            <input type="text" name="peso_liquido" value="{{ old('peso_liquido', $produto->peso_liquido) }}"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('peso_liquido') border-red-500 @enderror">
                            @error('peso_liquido')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-6 rounded">
                            Atualizar Produto
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // Máscara Valor de Venda (2 casas decimais)
        var valorVenda = document.getElementById('valor_venda');
        if (valorVenda) {
            valorVenda.addEventListener('input', function() {
                var valor = this.value.replace(/\D/g, '');
                valor = (parseInt(valor) / 100).toFixed(2);
                this.value = valor.replace('.', ',');
            });
        }

        // Máscara Peso Bruto (3 casas decimais)
        var pesoBruto = document.getElementById('peso_bruto');
        if (pesoBruto) {
            pesoBruto.addEventListener('input', function() {
                var valor = this.value.replace(/\D/g, '');
                valor = (parseInt(valor) / 1000).toFixed(3);
                this.value = valor.replace('.', ',');
            });
        }

        // Máscara Peso Líquido (3 casas decimais)
        var pesoLiquido = document.getElementById('peso_liquido');
        if (pesoLiquido) {
            pesoLiquido.addEventListener('input', function() {
                var valor = this.value.replace(/\D/g, '');
                valor = (parseInt(valor) / 1000).toFixed(3);
                this.value = valor.replace('.', ',');
            });
        }
    });
</script>

</x-app-layout>
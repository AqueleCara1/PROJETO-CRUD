<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Novo Cliente
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

                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Código *</label>
                            <input type="number" name="codigo" value="{{ old('codigo') }}"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('codigo') border-red-500 @enderror">
                            @error('codigo')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nome * <span class="text-gray-400 text-xs">(máx. 60 caracteres)</span></label>
                            <input type="text" name="nome" value="{{ old('nome') }}" maxlength="60"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('nome') border-red-500 @enderror">
                            @error('nome')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Fantasia <span class="text-gray-400 text-xs">(máx. 100 caracteres)</span></label>
                            <input type="text" name="fantasia" value="{{ old('fantasia') }}" maxlength="100"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('fantasia') border-red-500 @enderror">
                            @error('fantasia')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Documento <span class="text-gray-400 text-xs">(CPF ou CNPJ)</span></label>
                            <input type="text" name="documento" value="{{ old('documento') }}" 
                                id="documento" maxlength="18"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('documento') border-red-500 @enderror">
                            @error('documento')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Endereço</label>
                            <textarea name="endereco" rows="3"
                                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm @error('endereco') border-red-500 @enderror">{{ old('endereco') }}</textarea>
                            @error('endereco')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded">
                            Salvar Cliente
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var campo = document.getElementById('documento');
        if (campo) {
            campo.addEventListener('input', function() {
                var valor = this.value.replace(/\D/g, '');
                this.value = valor;
                if (valor.length <= 11) {
                    this.value = valor
                        .replace(/(\d{3})(\d)/, '$1.$2')
                        .replace(/(\d{3})(\d)/, '$1.$2')
                        .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                } else {
                    this.value = valor
                        .replace(/(\d{2})(\d)/, '$1.$2')
                        .replace(/(\d{3})(\d)/, '$1.$2')
                        .replace(/(\d{3})(\d)/, '$1/$2')
                        .replace(/(\d{4})(\d{1,2})$/, '$1-$2');
                }
            });
        }
    });
</script>
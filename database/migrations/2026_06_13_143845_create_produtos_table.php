<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo')->unique();
            $table->string('descricao', 60);
            $table->string('codigo_barras', 14)->nullable();
            $table->decimal('valor_venda', 10, 2);
            $table->decimal('peso_bruto', 10, 3)->nullable();
            $table->decimal('peso_liquido', 10, 3)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
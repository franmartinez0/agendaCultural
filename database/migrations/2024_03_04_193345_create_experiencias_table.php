<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha');
            $table->string('fecha_string');
            $table->text('descripcion_corta');
            $table->text('descripcion_larga');
            $table->double('precio', 10, 2);
            $table->string('link');
            $table->string('imagen')->nullable();
            $table->unsignedBigInteger("categoria_id")->nullable();
            $table->foreign("categoria_id")->references('id')->on('categorias')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedBigInteger("empresa_id")->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onUpdate('cascade')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};

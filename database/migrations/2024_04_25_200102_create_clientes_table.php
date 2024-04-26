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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("tickets");
            $table->foreignId("evento_id")->constrained()->onDelete("cascade");
            // $table->unsignedBigInteger("evento_id"); //* Crear la columna
            // $table->foreign("evento_id")->references("id")->on("eventos"); //* Hacer referencia a la tabla eventos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

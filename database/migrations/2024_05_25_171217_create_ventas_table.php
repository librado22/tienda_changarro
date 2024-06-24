<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Utiliza el patrón de diseño de migración anónima
return new class extends Migration
{
    /**
     * Ejecuta la migración.
     */
    public function up(): void
    {
        // Crea la tabla 'ventas'
        Schema::create('ventas', function (Blueprint $table) {
            $table->id(); // Define un campo 'id' como clave primaria
            $table->unsignedBigInteger('producto_id'); // Define un campo 'producto_id'
            $table->integer('cantidad'); // Define un campo 'cantidad'
            $table->decimal('total', 10, 2); // Define un campo 'total' como decimal(10, 2)
            $table->timestamps(); // Agrega automáticamente campos 'created_at' y 'updated_at'

            // Define una clave foránea que referencia la tabla 'productos' en el campo 'id'
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Revierte la migración.
     */
    public function down(): void
    {
        // Elimina la tabla 'ventas'
        Schema::dropIfExists('ventas');
    }
};


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
        Schema::create('computers', function (Blueprint $table) {
            $table->id(); // Identificador único.
            $table->string('name'); // Nombre de la computadora.
            $table->text('description'); // Descripción.
            $table->decimal('price', 8, 2); // Precio con dos decimales.
            $table->string('image_path')->nullable(); //imagen del producto
            $table->timestamps(); // Timestamps para 'created_at' y 'updated_at'.
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};

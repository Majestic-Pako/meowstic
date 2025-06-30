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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('blogs_id'); 
            $table->string('titulo', 100);
            $table->string('autor', 100);
            $table->text('synopsis')->nullable();
            $table->date('fecha');
            $table->enum('categoria', ['guia', 'reseña']);
            $table->string('informacion', 500);

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};

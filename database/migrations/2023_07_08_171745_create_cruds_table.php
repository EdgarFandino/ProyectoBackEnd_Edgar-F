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
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string("Nombres");
            $table->string("Apellidos");
            $table->string("TipoIdentificacion");
            $table->string("Identificacion");
            $table->bigInteger("Telefono");
            $table->string("Email");
            $table->string("Profesion");
            $table->string("Rol");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruds');
    }
};

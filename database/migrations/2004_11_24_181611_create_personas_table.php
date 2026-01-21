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
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id_persona');
            $table->string('nombres');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('carnet_identidad')->unique();
            $table->enum('genero', ['Masculino', 'Femenino'])->default('Masculino');
            $table->enum('condicion', ['Soltero(a)', 'Casado(a)', 'Divorciado(a)', 'Viudo(a)'])->default('Soltero(a)');
            $table->date('fecha_nacimiento');
            $table->integer('celular');
            $table->integer('auth_user');

            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('avatar_id')->references('id_avatar')->on('avatares');
            $table->foreignId('profesion_id')->references('id_profesion')->on('profesiones');
            $table->foreignId('municipio_id')->references('id_municipio')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

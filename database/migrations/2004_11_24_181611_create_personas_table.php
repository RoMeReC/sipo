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
            $table->increments('id_persona');
            $table->string('nombres');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('carnet_identidad')->unique();
            $table->date('fecha_nacimiento');
            $table->integer('celular');
            $table->integer('auth_user');
            $table->unsignedBigInteger('avatar_id');
            $table->unsignedBigInteger('condicion_id');
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('municipio_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('avatar_id')->references('id_avatar')->on('avatares');
            $table->foreign('condicion_id')->references('id_condicion')->on('condiciones');
            $table->foreign('genero_id')->references('id_genero')->on('generos');
            $table->foreign('municipio_id')->references('id_municipio')->on('municipios');
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

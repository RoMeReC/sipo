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
        Schema::create('servidores', function (Blueprint $table) {
            $table->id('id_servidor');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('grado_id');
            $table->unsignedBigInteger('especialidad_id');
            $table->unsignedBigInteger('uudd_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('persona_id')->references('id_persona')->on('personas');
            $table->foreign('grado_id')->references('id_grado')->on('grados');
            $table->foreign('especialidad_id')->references('id_especialidad')->on('especialidades');
            $table->foreign('uudd_id')->references('id_uudd')->on('uudds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servidores');
    }
};

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
        Schema::create('uudds', function (Blueprint $table) {
            $table->increments('id_uudd');
            $table->string('uudd');
            $table->string('descripcion_uudd');
            $table->unsignedBigInteger('gguu_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('gguu_id')->references('id_gguu')->on('gguus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uudds');
    }
};

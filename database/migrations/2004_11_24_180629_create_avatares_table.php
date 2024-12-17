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
        Schema::create('avatares', function (Blueprint $table) {
            $table->id('id_avatar');
            $table->string('name')->default('mavatar');
            $table->string('picture')->default('mavatar.png');
            $table->integer('auth_user');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatares');
    }
};

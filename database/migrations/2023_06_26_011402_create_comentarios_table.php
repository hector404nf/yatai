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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id_comentario');
            $table->unsignedBigInteger('fk_post');
            $table->foreign('fk_post')->references('id_publicaciones')->on('publicaciones');
            $table->foreignId('user_id')->constrained();
            $table->text('comentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};

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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->bigIncrements('id_publicaciones');
            $table->string('titulo');
            $table->string('descripcion');
            $table->double('precio');
            $table->string('path_adjunto');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('fk_categoria');
            $table->foreign('fk_categoria')->references('id_categoria')->on('categorias');
            $table->unsignedBigInteger('fk_tipopublicacion');
            $table->foreign('fk_tipopublicacion')->references('id_tipopublicacion')->on('tipopublicacion');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
    }
};

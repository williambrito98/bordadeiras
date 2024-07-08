<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bordadeiras', function (Blueprint $table) {
            $table->id();
            $table->string('banner_url');
            $table->string('nome');
            $table->string('thumbnail_url');
            $table->text('content');
            $table->json('images');
            $table->string('whatsapp')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('youtube')->nullable(true);
            $table->string('portifolio')->nullable(true);
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bordadeiras');
    }
};

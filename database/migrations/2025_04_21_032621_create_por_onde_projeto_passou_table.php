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
        Schema::create('por_onde_projeto_passou', function (Blueprint $table) {
            $table->id();
            $table->text('iframe_url')->nullable();
            $table->string('src', 255)->nullable();
            $table->string('alt', 255)->nullable();
            $table->string('description')->nullable();
            $table->string('order')->nullable();
            $table->boolean('visivel')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('por_onde_projeto_passou');
    }
};

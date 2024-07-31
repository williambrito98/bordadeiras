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
        Schema::create('apoiadores', function (Blueprint $table) {
            $table->id();
            $table->json('incentivadores')->nullable();
            $table->json('patrocinadores')->nullable();
            $table->json('parceiros')->nullable();
            $table->json('realizadores')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoiadores');
    }
};

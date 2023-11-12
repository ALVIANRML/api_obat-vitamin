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
        Schema::create('penyakits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_penyakit')->nullable()->unique();
            $table->string('nama')->nullable();
            $table->text('penyebab')->nullable();
            $table->text('gejala')->nullable();
            $table->text('pengobatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakits');
    }
};

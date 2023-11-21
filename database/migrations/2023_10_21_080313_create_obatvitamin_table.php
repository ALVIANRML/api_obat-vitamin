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
        Schema::create('obatvitamin', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_obatvitamin')->nullable()->unique();
            $table->string('nama')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('obat_dewasa')->nullable();
            $table->string('obat_anak')->nullable();
            $table->integer('harga')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obatvitamin');
    }
};

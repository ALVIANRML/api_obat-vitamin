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
        Schema::create('penyakit', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama')->nullable();
            $table->text('penyebab')->nullable();
            $table->text('pengobatan')->nullable();
            $table->uuid('obatvitamin_id')->nullable();
            $table->uuid ('gejala_id')->nullable();

            $table->foreign('obatvitamin_id')
            ->references('id')
            ->on('obatvitamin')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->foreign('gejala_id')
                  ->references('id')
                  ->on('gejala')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit');
    }
};

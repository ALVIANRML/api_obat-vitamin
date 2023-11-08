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
        Schema::table('penyakit', function (Blueprint $table) {
            $table->text('penyebab')->nullable()->change();
            $table->text('pengobatan')->nullable()->change();
            $table->uuid ('gejala_id')->nullable();

            $table->foreign('gejala_id')
                  ->references('id')
                  ->on('gejala')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penyakit', function (Blueprint $table) {
            $table->dropColumn('gejala_id');
        });
    }
};

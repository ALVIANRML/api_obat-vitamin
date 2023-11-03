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
        Schema::table('obatvitamin', function (Blueprint $table) {
            $table->uuid('umur_id')->nullable();

            $table->foreign('umur_id')
            ->references('id')
            ->on('umur')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('obatvitamin', function (Blueprint $table) {
            //
        });
    }
};

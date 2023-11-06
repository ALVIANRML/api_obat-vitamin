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
            $table->dropColumn('umur_obat');
            $table->text('deskripsi')->nullable()->change();
            $table->string('obat_dewasa')->nullable();
            $table->string('obat_anak')->nullable();

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

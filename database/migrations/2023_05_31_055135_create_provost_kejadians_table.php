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
        Schema::create('provost_kejadians', function (Blueprint $table) {
            $table->id();
            $table->string('waktu_kejadian');
            $table->string('tempat_kejadian');
            $table->string('kejadian_apa');
            $table->longText('bagaimana_terjadi');
            $table->string('tindak_pidana_apa');
            $table->longText('barang_bukti');
            $table->foreignId('provost_pelapor_id')->constrained('provost_terlapors')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provost_kejadians');
    }
};
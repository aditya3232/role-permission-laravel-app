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
        Schema::create('izin_keramaians', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nik');
            $table->string('pekerjaan');
            $table->string('kebangsaan');
            $table->string('status_perkawinan');
            $table->string('agama');
            $table->longText('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('bentuk_keramaian');
            $table->string('jumlah_peserta');
            $table->string('waktu_pelaksanaan');
            $table->string('tempat_pelaksanaan');
            $table->string('waktu_selesai');
            $table->string('keterangan_tambahan');
            $table->string('rute');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_keramaians');
    }
};
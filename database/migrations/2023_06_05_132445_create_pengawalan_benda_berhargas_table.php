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
        Schema::create('pengawalan_benda_berhargas', function (Blueprint $table) {
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
            $table->string('instansi');
            $table->string('nama_benda');
            $table->string('jumlah_benda');
            $table->string('waktu_pengawalan');
            $table->string('rute_pengawalan');
            $table->string('keterangan');
            $table->string('turut_serta');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawalan_benda_berhargas');
    }
};
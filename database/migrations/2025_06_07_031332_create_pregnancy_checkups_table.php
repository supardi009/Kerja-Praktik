<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pregnancy_checkups', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_registrasi')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Data Pasien
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('rt_rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota_kabupaten');
            $table->string('no_telp');
            $table->string('no_ktp')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('nama_suami')->nullable();

            // Data Medis
            $table->text('riwayat_kehamilan');
            $table->text('riwayat_penyakit')->nullable();
            $table->text('riwayat_alergi');
            $table->text('keluhan')->nullable();

            // Informasi Kehamilan
            $table->date('hpht');
            $table->integer('usia_kehamilan')->nullable();
            $table->text('riwayat_pemeriksaan')->nullable();
            $table->string('imunisasi_tt');

            // Layanan
            $table->json('layanan');
            $table->date('tanggal_periksa');
            $table->string('waktu_periksa');

            // Status
            $table->string('status')->default('pending');
            $table->text('alasan_penolakan')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pregnancy_checkups');
    }
};

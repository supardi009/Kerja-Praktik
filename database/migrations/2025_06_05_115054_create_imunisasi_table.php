<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('imunisasi', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_registrasi')->unique();
            $table->string('nama_anak');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('akta_kelahiran');
            $table->string('nik_anak');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('no_hp');
            $table->string('alamat_ortu');
            $table->text('riwayat_alergi')->nullable();
            $table->text('kondisi_khusus')->nullable();
            $table->text('riwayat_imunisasi')->nullable();
            $table->string('jenis_imunisasi');
            $table->datetime('jadwal');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imunisasi');
    }
};
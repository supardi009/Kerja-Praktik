<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sunat_moderns', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('nama_ortu');
            $table->text('riwayat_alergi');
            $table->text('kondisi_khusus')->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->string('jenis_sunat');
            $table->json('paket_tambahan')->nullable();
            $table->date('tanggal_sunat');
            $table->string('waktu_sunat');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->text('alasan_penolakan')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sunat_moderns');
    }
};

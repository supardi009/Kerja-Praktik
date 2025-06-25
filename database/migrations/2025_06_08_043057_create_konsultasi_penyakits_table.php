<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('konsultasi_penyakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->text('keluhan_utama');
            $table->text('riwayat_penyakit')->nullable();
            $table->string('alergi_obat')->nullable();
            $table->string('obat_dikonsumsi')->nullable();
            $table->date('tanggal_janji');
            $table->time('jam_janji');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('konsultasi_penyakits');
    }
};

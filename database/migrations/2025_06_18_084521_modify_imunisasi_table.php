<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Tambahkan kolom yang belum ada
        Schema::table('imunisasi', function (Blueprint $table) {
            if (!Schema::hasColumn('imunisasi', 'alasan_penolakan')) {
                $table->text('alasan_penolakan')->nullable()->after('status');
            }
            
            // Tambahkan kolom lain yang mungkin belum ada
            $columns = [
                'nama_anak', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
                'alamat', 'akta_kelahiran', 'nik_anak', 'nama_ibu', 'nama_ayah',
                'no_hp', 'alamat_ortu', 'riwayat_alergi', 'kondisi_khusus',
                'riwayat_imunisasi', 'jenis_imunisasi', 'jadwal', 'status'
            ];
            
            foreach ($columns as $column) {
                if (!Schema::hasColumn('imunisasi', $column)) {
                    // Sesuaikan tipe data sesuai kebutuhan
                    $table->string($column)->nullable();
                }
            }
        });
    }

    public function down()
    {
        // Hanya menghapus kolom yang baru ditambahkan
        Schema::table('imunisasi', function (Blueprint $table) {
            $table->dropColumn('alasan_penolakan');
        });
    }
};
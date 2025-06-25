<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('imunisasi', function (Blueprint $table) {
            // Pertama tambahkan kolom status jika belum ada
            if (!Schema::hasColumn('imunisasi', 'status')) {
                $table->string('status')->default('pending');
            }

            // Kemudian tambahkan alasan_penolakan
            if (!Schema::hasColumn('imunisasi', 'alasan_penolakan')) {
                $table->text('alasan_penolakan')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('imunisasi', function (Blueprint $table) {
            $table->dropColumn(['alasan_penolakan', 'status']);
        });
    }
};

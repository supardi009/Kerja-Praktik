<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // 1. Cari dan perbaiki data yang tidak valid terlebih dahulu
        \Illuminate\Support\Facades\DB::statement("
        UPDATE konsultasi_penyakits 
        SET user_id = NULL 
        WHERE user_id IS NOT NULL 
        AND user_id NOT IN (SELECT id FROM users)
    ");

        // 2. Tambahkan foreign key constraint
        Schema::table('konsultasi_penyakits', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('konsultasi_penyakits', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    }
};

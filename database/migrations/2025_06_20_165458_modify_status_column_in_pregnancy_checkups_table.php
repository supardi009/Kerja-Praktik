<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pregnancy_checkups', function (Blueprint $table) {
            $table->string('status', 20)
                ->default('pending')
                ->change(); // Ubah menjadi string dengan panjang 20
        });
    }

    public function down()
    {
        Schema::table('pregnancy_checkups', function (Blueprint $table) {
            // Jika perlu rollback
            $table->string('status', 10)->change();
        });
    }
};

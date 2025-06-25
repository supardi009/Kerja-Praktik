<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pregnancy_checkups', function (Blueprint $table) {
            $table->text('alasan_penolakan')->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('pregnancy_checkups', function (Blueprint $table) {
            $table->dropColumn('alasan_penolakan');
        });
    }
};

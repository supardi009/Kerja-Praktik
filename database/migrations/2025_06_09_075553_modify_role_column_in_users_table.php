<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // First check if the column exists
        if (Schema::hasColumn('users', 'role')) {
            // Modify the existing column
            DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('admin', 'pengunjung') NOT NULL DEFAULT 'pengunjung'");
        } else {
            // Add the column if it doesn't exist
            Schema::table('users', function (Blueprint $table) {
                $table->enum('role', ['admin', 'pengunjung'])->default('pengunjung');
            });
        }
    }

    public function down()
    {
        // Revert back to string if needed
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('pengunjung')->change();
        });
    }
};

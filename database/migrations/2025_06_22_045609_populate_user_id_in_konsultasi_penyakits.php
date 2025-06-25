<?php

use App\Models\KonsultasiPenyakit;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;

class PopulateUserIdInKonsultasiPenyakits extends Migration
{
    public function up()
    {
        $konsultasis = KonsultasiPenyakit::all();

        foreach ($konsultasis as $konsultasi) {
            $user = User::where('email', $konsultasi->email)->first();
            if ($user) {
                $konsultasi->user_id = $user->id;
                $konsultasi->save();
            }
        }
    }

    public function down()
    {
        // Optional: Tambahkan rollback logic jika diperlukan
        KonsultasiPenyakit::whereNotNull('user_id')->update(['user_id' => null]);
    }
}

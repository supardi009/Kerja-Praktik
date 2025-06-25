<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use Carbon\Carbon;


class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => '2203304405506601',
                'nama' => 'Lionel Messi',
                'telepon' => '081000111222',
                'alamat' => 'Kalikajar, Wonosobo',
                'tgl_kunjung' => Carbon::now(),
                'poli_id' => '1'
            ],
        ];

        Pengunjung::insert($data);
    }
}

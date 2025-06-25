<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiPenyakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nomor_telepon',
        'email',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'keluhan_utama',
        'riwayat_penyakit',
        'alergi_obat',
        'obat_dikonsumsi',
        'tanggal_janji',
        'jam_janji',
        'status',
        'catatan',
        'user_id',
    ];

    // di app/Models/KonsultasiPenyakit.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

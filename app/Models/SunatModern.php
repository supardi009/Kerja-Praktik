<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SunatModern extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telp',
        'nama_ortu',
        'riwayat_alergi',
        'kondisi_khusus',
        'riwayat_penyakit',
        'jenis_sunat',
        'paket_tambahan',
        'tanggal_sunat',
        'waktu_sunat',
        'status',
        'alasan_penolakan',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_sunat' => 'date',
        'paket_tambahan' => 'array',
        'status' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

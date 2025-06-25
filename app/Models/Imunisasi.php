<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    protected $table = 'imunisasi';
    use HasFactory;

    protected $fillable = [
        'nomor_registrasi',
        'nama_anak',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'akta_kelahiran',
        'nik_anak',
        'nama_ibu',
        'nama_ayah',
        'no_hp',
        'alamat_ortu',
        'riwayat_alergi',
        'kondisi_khusus',
        'riwayat_imunisasi',
        'jenis_imunisasi',
        'jadwal',
        'status',
        'user_id',
        'alasan_penolakan'
    ];

    protected $casts = [
        'jadwal' => 'datetime',
        'tanggal_lahir' => 'date'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $dates = [
        'tanggal_lahir',
        'jadwal',
        'created_at',
        'updated_at'
    ];

    // Jika Anda ingin membuat format khusus untuk nomor registrasi
    public static function generateRegistrationNumber()
    {
        $latest = static::latest()->first();
        $number = $latest ? (int) explode('-', $latest->nomor_registrasi)[2] + 1 : 1;

        return 'IM-' . date('Ymd') . '-' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }
}

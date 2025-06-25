<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PregnancyCheckup extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tanggal_lahir',
        'alamat',
        'rt_rw',
        'kelurahan',
        'kecamatan',
        'kota_kabupaten',
        'no_telp',
        'no_ktp',
        'no_bpjs',
        'nama_suami',
        'riwayat_kehamilan',
        'riwayat_penyakit',
        'riwayat_alergi',
        'keluhan',
        'hpht',
        'usia_kehamilan',
        'riwayat_pemeriksaan',
        'imunisasi_tt',
        'layanan',
        'tanggal_periksa',
        'waktu_periksa',
        'status',
        'alasan_penolakan'
    ];

    protected $casts = [
        'layanan' => 'array',
        'tanggal_periksa' => 'date',
        'hpht' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateRegistrationNumber()
    {
        $datePart = date('Ymd');
        $lastRecord = self::where('nomor_registrasi', 'like', 'REG-KEH-' . $datePart . '-%')
            ->orderBy('nomor_registrasi', 'desc')
            ->first();

        if ($lastRecord) {
            $lastNumber = (int) substr($lastRecord->nomor_registrasi, -4);
            $nextNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $nextNumber = '0001';
        }

        return 'REG-KEH-' . $datePart . '-' . $nextNumber;
    }
}

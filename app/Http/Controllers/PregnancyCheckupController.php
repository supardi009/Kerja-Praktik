<?php

namespace App\Http\Controllers;

use App\Models\PregnancyCheckup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PregnancyCheckupController extends Controller
{
    public function showForm()
    {
        return view('pengunjung.periksa-kehamilan', [
            'title' => 'Periksa Kehamilan'
        ]);
    }

    public function submit(Request $request)
    {
        Log::info('Data yang dikirim:', $request->all());
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'no_telp' => 'required|string|max:15',
            'no_ktp' => 'nullable|string|max:16',
            'no_bpjs' => 'nullable|string|max:13',
            'nama_suami' => 'nullable|string|max:255',
            'riwayat_kehamilan' => 'required|string',
            'riwayat_penyakit' => 'nullable|string',
            'riwayat_alergi' => 'required|string',
            'keluhan' => 'nullable|string',
            'hpht' => 'required|date',
            'usia_kehamilan' => 'nullable|integer|min:1|max:42',
            'riwayat_pemeriksaan' => 'nullable|string',
            'imunisasi_tt' => 'required|string|in:Sudah,Belum',
            'layanan' => 'required|array',
            'layanan.*' => 'string',
            'tanggal_periksa' => 'required|date|after_or_equal:today',
            'waktu_periksa' => 'required|string',
        ]);

        if (is_array($validated['layanan'])) {
            $validated['layanan'] = json_encode($validated['layanan']);
        }

        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Silakan login terlebih dahulu',
                'redirect' => route('login')
            ], 401);
        }

        // Tambahkan data tambahan
        $validated['user_id'] = auth()->id();
        $validated['nomor_registrasi'] = 'REG-KEH-' . date('Ymd') . '-' . strtoupper(uniqid());
        $validated['status'] = 'pending';
        $validated['layanan'] = json_encode($request->layanan); // Simpan sebagai JSON

        // Simpan data dengan error handling
        try {
            $checkup = PregnancyCheckup::create($validated);
            Log::info('Data tersimpan:', $checkup->toArray());

            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran berhasil!',
                'redirect' => route('pengunjung.notifikasi')
            ]);
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SunatModern;

class SunatModernController extends Controller
{
    public function index()
    {
        return view('pengunjung.sunat-modern', ['title' => 'Sunat Modern']);
    }

    public function store(Request $request)
    {
        // Logika penyimpanan sama dengan method submit
        return $this->submit($request);
    }

    public function create()
    {
        return view('pengunjung.sunat-modern', ['title' => 'Sunat Modern']);
    }

    public function submit(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            // Form Data Diri
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'nama_ortu' => 'required',

            // Form Medis
            'riwayat_alergi' => 'required',
            'kondisi_khusus' => 'nullable',
            'riwayat_penyakit' => 'nullable',

            // Form Paket
            'jenis_sunat' => 'required',
            'paket_tambahan' => 'nullable|array',

            // Form Jadwal
            'tanggal_sunat' => 'required|date',
            'waktu_sunat' => 'required',
        ]);

        $validated['user_id'] = auth()->id() ?? null;
        $validated['status'] = 'pending'; // Status default

        // Simpan data ke database
        SunatModern::create($validated);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Pemesanan berhasil...',
                'data' => $validated
            ]);
        }

        return redirect()->route('sunat-modern.create')
            ->with('success', 'Pemesanan berhasil...');
    }
}

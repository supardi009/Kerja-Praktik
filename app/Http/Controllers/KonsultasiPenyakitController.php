<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiPenyakit;
use Illuminate\Http\Request;

class KonsultasiPenyakitController extends Controller
{
    public function index()
    {
        return view('pengunjung.konsultasi-penyakit', [
            'title' => 'Konsultasi Penyakit'
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap'      => 'required',
            'nomor_telepon'     => 'required',
            'email'             => 'required|email',
            'jenis_kelamin'     => 'required|in:L,P',
            'tanggal_lahir'     => 'required|date',
            'alamat'            => 'required',
            'keluhan_utama'     => 'required',
            'riwayat_penyakit'  => 'nullable',
            'alergi_obat'       => 'nullable',
            'obat_dikonsumsi'   => 'nullable',
            'tanggal_janji'     => 'required|date',
            'jam_janji'         => 'required',
        ]);

        // Tambahkan user_id yang sedang login
        $validated['user_id'] = auth()->id();

        // Tambahkan status dan catatan default
        $validated['status'] = 'pending';
        $validated['catatan'] = 'Menunggu konfirmasi dari admin.';

        // Simpan ke database
        KonsultasiPenyakit::create($validated);

        return back()->with('success', 'Konsultasi berhasil dikirim.');
    }
}

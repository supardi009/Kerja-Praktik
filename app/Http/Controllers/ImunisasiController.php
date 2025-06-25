<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imunisasi;

class ImunisasiController extends Controller
{
    public function index()
    {
        return view('pengunjung.imunisasi-anak', [
            'title' => 'Imunisasi Anak'
        ]);
    }

    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'nama_anak' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'akta_kelahiran' => 'required|string|max:255',
            'nik_anak' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat_ortu' => 'required|string|max:255',
            'riwayat_alergi' => 'nullable|string',
            'kondisi_khusus' => 'nullable|string',
            'riwayat_imunisasi' => 'nullable|string',
            'jenis_imunisasi' => 'required|string',
            'jadwal' => 'required|date',
        ]);

        // Generate registration number
        $validated['user_id'] = auth()->id();
        $number = Imunisasi::generateRegistrationNumber();
        $validated['nomor_registrasi'] = $number;
        $validated['status'] = 'pending';

        // Redirect with success message
        Imunisasi::create($validated);

        return redirect()->route('imunisasi.form')
            ->with('success', 'Pendaftaran berhasil dibuat.')
            ->with('registration_number', $number);
    }
}

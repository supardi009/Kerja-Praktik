<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiPenyakit;
use Illuminate\Http\Request;

class AdminKonsultasiPenyakitController extends Controller
{
    public function index()
    {
        $konsultasis = KonsultasiPenyakit::latest()->paginate(10);
        return view('admin.konsultasi-penyakit.index', [
            'title' => 'Data Konsultasi Penyakit',
            'konsultasis' => $konsultasis
        ]);
    }

    public function show($id)
    {
        $data = KonsultasiPenyakit::findOrFail($id);
        return view('admin.konsultasi-penyakit.show', [
            'title' => 'Detail Konsultasi Penyakit',
            'data' => $data
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,rejected,completed',
            'catatan' => 'nullable|string'
        ]);

        $konsultasi = KonsultasiPenyakit::findOrFail($id);
        $konsultasi->status = $validated['status'];
        $konsultasi->catatan = $validated['catatan'];
        $konsultasi->save();

        return redirect()->back()->with('success', 'Status konsultasi berhasil diperbarui!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use Illuminate\Http\Request;

class AdminImunisasiController extends Controller
{
    public function index()
    {
        $imunisasi = Imunisasi::with('user')->latest()->paginate(10);
        return view('admin.imunisasi.index', [
            "title" => "Data Imunisasi Anak",
            "imunisasi" => $imunisasi
        ]);
    }

    public function show($id)
    {
        $data = Imunisasi::with('user')->findOrFail($id);
        return view('admin.imunisasi.show', [
            'data' => $data,
            'title' => 'Detail Imunisasi Anak'
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected,reschedule',
            'alasan_penolakan' => ($request->status === 'rejected' || $request->status === 'reschedule')
                ? 'required|string'
                : 'nullable|string',
        ]);

        $imunisasi = Imunisasi::findOrFail($id);
        $imunisasi->update([
            'status' => $validated['status'],
            'alasan_penolakan' => $validated['alasan_penolakan'] ?? null
        ]);

        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PregnancyCheckup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminPregnancyCheckupController extends Controller
{
    /**
     * Menampilkan daftar semua pemeriksaan kehamilan
     */
    public function index()
    {
        $checkups = PregnancyCheckup::with('user')
            ->latest()
            ->paginate(10);

        return view('admin.periksa-kehamilan.index', [
            'title' => 'Data Periksa Kehamilan',
            'checkups' => $checkups
        ]);
    }

    /**
     * Menampilkan detail dari pemeriksaan tertentu
     */
    public function show($id)
    {
        $data = PregnancyCheckup::findOrFail($id);

        return view('admin.periksa-kehamilan.show', [
            'data' => $data,
            'title' => 'Detail Periksa Kehamilan'
        ]);
    }

    /**
     * Memperbarui status pengajuan oleh admin
     */
    public function updateStatus(Request $request, $id)
    {
        Log::debug('Permintaan Update Status:', $request->all());

        // Validasi input
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,rejected,completed',
            'alasan_penolakan' => $request->status === 'rejected' ? 'required|string' : 'nullable|string',
        ]);

        // Ambil data dan update
        $checkup = PregnancyCheckup::findOrFail($id);
        Log::debug('Data Sebelum Update:', $checkup->toArray());

        $checkup->status = $validated['status'];
        $checkup->alasan_penolakan = $validated['alasan_penolakan'] ?? null;

        $saved = $checkup->save();

        Log::debug('Status Update:', ['success' => $saved]);
        Log::debug('Data Setelah Update:', $checkup->fresh()->toArray());

        return redirect()
            ->route('admin.periksa-kehamilan.show', $checkup->id)
            ->with('success', 'Status berhasil diperbarui!')
            ->with('updated_data', $checkup->fresh());
    }
}

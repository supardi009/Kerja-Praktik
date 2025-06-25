<?php

namespace App\Http\Controllers;

use App\Models\SunatModern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminSunatModernController extends Controller
{
    public function index()
    {
        $sunatModern = SunatModern::with('user')->latest()->get();
        return view('admin.sunat-modern.index', [
            "title" => "Data Sunat Modern",
            "sunatModern" => $sunatModern
        ]);
    }

    public function show($id)
    {
        $data = SunatModern::findOrFail($id);
        return view('admin.sunat-modern.show', [
            'data' => $data,
            'title' => 'Detail Sunat Modern'
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected,reschedule'
        ]);

        $statusMap = [
            'approved' => 'disetujui',
            'rejected' => 'ditolak',
            'reschedule' => 'reschedule',
            'pending' => 'pending'
        ];

        $status = $statusMap[$validated['status']] ?? $validated['status'];

        try {
            SunatModern::where('id', $id)->update([
                'status' => $status,
                'alasan_penolakan' => null
            ]);
        } catch (\Exception $e) {
            Log::error('Update status failed', [
                'error' => $e->getMessage(),
                'data' => $request->all()
            ]);
            return back()->with('error', 'Gagal mengupdate status!');
        }

        return back()->with('success', 'Status berhasil diperbarui!');
    }
}

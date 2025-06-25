<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\SunatModern;
use App\Models\Imunisasi;
use App\Models\PregnancyCheckup;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\KonsultasiPenyakit;
use Carbon\Carbon;

class NotifikasiController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        // Ambil data dari semua layanan dengan status tidak null
        $periksaKehamilan = PregnancyCheckup::where('user_id', $userId)
            ->whereNotNull('status')
            ->orderBy('created_at', 'desc')
            ->get();

        $imunisasi = Imunisasi::where('user_id', $userId)
            ->whereNotNull('status')
            ->get();

        $sunatModern = SunatModern::where('user_id', $userId)
            ->whereNotNull('status')
            ->get();

        // ⚠️ Menghapus filter user_id dari konsultasi
        $konsultasi = KonsultasiPenyakit::where('user_id', $userId)
            ->whereNotNull('status')
            ->orderBy('created_at', 'desc')
            ->get();

        // Gabungkan semua data
        $allSubmissions = collect()
            ->concat($periksaKehamilan)
            ->concat($imunisasi)
            ->concat($sunatModern)
            ->concat($konsultasi)
            ->sortByDesc('created_at');

        // Paginasi
        $submissions = new \Illuminate\Pagination\LengthAwarePaginator(
            $allSubmissions->forPage(request('page', 1), 10),
            $allSubmissions->count(),
            10,
            request('page'),
            ['path' => request()->url()]
        );

        return view('pengunjung.notifikasi', [
            'submissions' => $submissions,
            'title' => 'Notifikasi Layanan'
        ]);
    }


    public function show($id)
    {
        // Cari data di semua model
        $submission = PregnancyCheckup::where('user_id', auth()->id())->find($id);

        if (!$submission) {
            $submission = SunatModern::where('user_id', auth()->id())->find($id);
        }

        if (!$submission) {
            $submission = Imunisasi::where('user_id', auth()->id())->find($id);
        }

        if (!$submission) {
            $submission = KonsultasiPenyakit::where('user_id', auth()->id())->find($id);
        }

        if (!$submission) {
            abort(404, 'Data tidak ditemukan');
        }

        // Tentukan view berdasarkan jenis layanan
        $view = 'pengunjung.notifikasi-detail';
        $title = 'Detail Pengajuan';

        if ($submission instanceof PregnancyCheckup) {
            $view = 'pengunjung.notifikasi-kehamilan';
            $title = 'Detail Periksa Kehamilan';
        } elseif ($submission instanceof SunatModern) {
            $view = 'pengunjung.notifikasi-sunat';
            $title = 'Detail Sunat Modern';
        } elseif ($submission instanceof Imunisasi) {
            $view = 'pengunjung.notifikasi-imunisasi';
            $title = 'Detail Imunisasi';
        } elseif ($submission instanceof KonsultasiPenyakit) {
            $view = 'pengunjung.notifikasi-konsultasi';
            $title = 'Detail Konsultasi Penyakit';
        }

        return view($view, [
            'submission' => $submission,
            'title' => $title
        ]);
    }

}

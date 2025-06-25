<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengunjung;
use App\Models\Poli;
use App\Models\User;
use Carbon\Carbon;

class PengunjungController extends Controller
{
    public function __construct()
    {
        // Middleware hanya diterapkan pada method kecuali index, about, service, contact
        $this->middleware(['auth', 'user-access:pengunjung'])->except([
            'index',
            'about',
            'service',
            'contact'
        ]);
    }

    // Method untuk halaman utama yang bisa diakses semua orang
    public function index()
    {
        // Jika user sudah login, tampilkan data sesuai role
        if (auth()->check()) {
            $user = Auth::user();
            $hari = Carbon::today();
            $besok = Carbon::today()->addDay();

            if ($user->role === 'admin') {
                $pengunjung = Pengunjung::whereDate('tgl_kunjung', $hari)->count();
                $pengunjungbesok = Pengunjung::whereDate('tgl_kunjung', $besok)->count();
                $semuapengunjung = Pengunjung::count();
            } else {
                $pengunjung = Pengunjung::where('user_id', $user->id)
                    ->whereDate('tgl_kunjung', $hari)
                    ->count();
                $pengunjungbesok = Pengunjung::where('user_id', $user->id)
                    ->whereDate('tgl_kunjung', $besok)
                    ->count();
                $semuapengunjung = Pengunjung::where('user_id', $user->id)->count();
            }

            return view('pengunjung.index', [
                "title" => "Beranda",
                "user" => $user
            ], compact('pengunjung', 'pengunjungbesok', 'semuapengunjung'));
        }

        // Untuk pengunjung yang belum login
        return view('pengunjung.index', [
            "title" => "Beranda"
        ]);
    }

    // Method untuk halaman pendaftaran (memerlukan login)
    public function create()
    {
        $user = Auth::user();
        $polis = Poli::all();

        return view('pengunjung.pendaftaran', [
            "title" => "Pendaftaran Pasien",
            "user" => $user
        ], compact('polis'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nik' => 'required|digits:16|unique:pengunjungs|numeric',
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
            'tgl_kunjung' => 'required|date',
            'poli_id' => 'required|numeric|exists:polis,id',
        ]);

        $data = $request->all();
        $data['user_id'] = $user->id;

        Pengunjung::create($data);

        return redirect()->route('pengunjung.create')->with('success', 'Pendaftaran Berhasil!');
    }

    // Method untuk halaman artikel (bisa diakses tanpa login)
    public function about()
    {
        $articles = []; // Anda bisa menambahkan data artikel di sini

        return view('pengunjung.article', [
            'title' => 'Edukasi Kesehatan',
            'articles' => $articles,
            'user' => auth()->user() // Optional: hanya mengirim user jika sudah login
        ]);
    }

    // Method untuk halaman layanan (bisa diakses tanpa login)
    public function service()
    {
        return view('pengunjung.service', [
            "title" => "Layanan Kami",
            "user" => auth()->user() // Optional
        ]);
    }

    // Method untuk halaman kontak (bisa diakses tanpa login)
    public function contact()
    {
        return view('pengunjung.contact', [
            "title" => "Hubungi Kami",
            "user" => auth()->user() // Optional
        ]);
    }
}

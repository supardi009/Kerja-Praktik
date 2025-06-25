<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengunjung;
use App\Models\Poli;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:member');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $pengunjung = Pengunjung::where('user_id', $user->id)->first();

        return view('member.dashboard', [
            "title" => "Dashboard Member",
            "pengunjung" => $pengunjung
        ]);
    }

    public function editProfile()
    {
        $user = Auth::user();
        $pengunjung = Pengunjung::where('user_id', $user->id)->first();
        $poli = Poli::all();

        return view('member.edit', [
            "title" => "Edit Profil",
            "pengunjung" => $pengunjung,
            "poli" => $poli
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $pengunjung = Pengunjung::where('user_id', $user->id)->first();

        $request->validate([
            'nik' => 'required|digits:16|unique:pengunjungs,nik,' . ($pengunjung ? $pengunjung->id : 'NULL'),
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
            'tgl_kunjung' => 'required|date',
        ]);

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'tgl_kunjung' => $request->tgl_kunjung,
            'user_id' => $user->id,
            'email' => $user->email
        ];

        if ($pengunjung) {
            $pengunjung->update($data);
        } else {
            Pengunjung::create($data);
        }

        return redirect('/member/dashboard')->with('success', 'Profil berhasil diperbarui');
    }
}

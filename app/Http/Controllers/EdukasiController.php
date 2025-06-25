<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function sunat()
    {
        return view('pengunjung.edukasi1', ['title' => 'Edukasi Sunat Modern']);
    }

    public function imunisasi()
    {
        return view('pengunjung.edukasi2', ['title' => 'Edukasi Imunisasi Anak']);
    }

    public function kehamilan()
    {
        return view('pengunjung.edukasi3', ['title' => 'Edukasi Periksa Kehamilan']);
    }

    public function konsultasi()
    {
        return view('pengunjung.edukasi4', ['title' => 'Edukasi Konsultasi Penyakit']);
    }
}

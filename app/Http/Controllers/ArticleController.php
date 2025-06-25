<?php

namespace App\Http\Controllers;

use App\Models\Article; // Pastikan model Article di-import
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Method untuk menampilkan daftar artikel
    public function index()
    {
        $articles = Article::latest()->get(); // Mengambil semua artikel terbaru
        return view('pengunjung.article', compact('articles')); // Melemparkan data ke view
    }

    // Tambahkan method lain (create, store, edit, dll.) sesuai kebutuhan...
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\PregnancyCheckupController;
use App\Http\Controllers\KonsultasiPenyakitController;
use App\Http\Controllers\SunatModernController;
use App\Http\Controllers\AdminSunatModernController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\AdminImunisasiController;
use App\Http\Controllers\AdminPregnancyCheckupController;   
use App\Http\Controllers\AdminKonsultasiPenyakitController;
use App\Http\Controllers\EdukasiController;


// PUBLIC ROUTES
Route::get('/', [PengunjungController::class, 'index']);
// RUTE EDUKASI PUBLIK
Route::prefix('edukasi')->group(function () {
    Route::get('/sunat', [EdukasiController::class, 'sunat'])->name('edukasi.sunat');
    Route::get('/imunisasi', [EdukasiController::class, 'imunisasi'])->name('edukasi.imunisasi');
    Route::get('/kehamilan', [EdukasiController::class, 'kehamilan'])->name('edukasi.kehamilan');
    Route::get('/konsultasi', [EdukasiController::class, 'konsultasi'])->name('edukasi.konsultasi');
});

// AUTHENTICATION ROUTES
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

// PENGUNJUNG PUBLIC ROUTES (tanpa auth)
Route::get('/pendaftaran', [PengunjungController::class, 'create'])->name('pengunjung.create');
Route::post('/pendaftaran', [PengunjungController::class, 'store'])->name('pengunjung.store');
Route::get('/article', [PengunjungController::class, 'about'])->name('pengunjung.article');
Route::get('/service', [PengunjungController::class, 'service'])->name('pengunjung.service');
Route::get('/contact', [PengunjungController::class, 'contact'])->name('pengunjung.contact');

// ARTICLES
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// PENGUNJUNG AUTHENTICATED ROUTES
Route::middleware(['auth', 'user-access:pengunjung'])->prefix('pengunjung')->group(function () {
    Route::get('/dashboard', [PengunjungController::class, 'index'])->name('pengunjung.dashboard');

    Route::get('/sunat-modern', [SunatModernController::class, 'create'])
        ->name('sunat-modern.create');
    Route::post('/sunat-modern/store', [SunatModernController::class, 'store'])
        ->name('sunat-modern.store');
    Route::post('/sunat-modern', [SunatModernController::class, 'submit'])
        ->name('sunat-modern.submit');

    Route::get('/imunisasi-anak', [ImunisasiController::class, 'index'])->name('imunisasi.form');
    Route::post('/imunisasi-anak', [ImunisasiController::class, 'submit'])->name('imunisasi.submit');

    Route::get('/periksa-kehamilan', [PregnancyCheckupController::class, 'showForm'])
        ->name('periksa-kehamilan.form');
    Route::post('/periksa-kehamilan', [PregnancyCheckupController::class, 'submit'])
        ->name('periksa-kehamilan.submit');

    Route::get('/konsultasi-penyakit', [KonsultasiPenyakitController::class, 'index'])->name('konsultasi-penyakit');
    Route::post('/konsultasi-penyakit', [KonsultasiPenyakitController::class, 'store'])->name('konsultasi-penyakit.store');
});

// PERIKSA KEHAMILAN (bisa diakses oleh pengunjung terdaftar)
Route::middleware(['auth', 'user-access:pengunjung'])->group(function () {

    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('pengunjung.notifikasi');
    Route::get('/notifikasi/{type}/{id}', [NotifikasiController::class, 'show'])
        ->name('pengunjung.notifikasi.show')
        ->where('type', 'sunat|imunisasi|kehamilan');
});

// ADMIN ROUTES - CHANGED FROM 'role:admin' TO 'user-access:admin'
Route::middleware(['auth', 'user-access:admin'])
    ->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');

        // SUNAT MODERN MANAGEMENT
        Route::get('/sunat-modern', [AdminSunatModernController::class, 'index'])
            ->name('admin.sunat.index');

        // Tambahkan route untuk show
        Route::get('/sunat-modern/{id}', [AdminSunatModernController::class, 'show'])
            ->name('admin.sunat-modern.show');
        Route::put('/sunat-modern/{id}/status', [AdminSunatModernController::class, 'updateStatus'])
            ->name('admin.sunat-modern.update-status');

        Route::get('/imunisasi', [AdminImunisasiController::class, 'index'])->name('admin.imunisasi.index');
        Route::get('/imunisasi/{id}', [AdminImunisasiController::class, 'show'])->name('admin.imunisasi.show');

        // Route POST/PUT untuk update status
        Route::post('/imunisasi/{id}/update-status', [AdminImunisasiController::class, 'updateStatus'])
            ->name('admin.imunisasi.update-status');

        // routes/web.php
        Route::get('/periksa-kehamilan', [AdminPregnancyCheckupController::class, 'index'])->name('admin.periksa-kehamilan.index');
        Route::get('/periksa-kehamilan/{id}', [AdminPregnancyCheckupController::class, 'show'])->name('admin.periksa-kehamilan.show');
        Route::put('/periksa-kehamilan/{id}/update-status', [AdminPregnancyCheckupController::class, 'updateStatus'])->name('admin.periksa-kehamilan.update-status');

        Route::get('/konsultasi-penyakit', [AdminKonsultasiPenyakitController::class, 'index'])
            ->name('admin.konsultasi-penyakit.index');
        Route::get('/konsultasi-penyakit/{id}', [AdminKonsultasiPenyakitController::class, 'show'])
            ->name('admin.konsultasi-penyakit.show');
        Route::put('/konsultasi-penyakit/{id}/update-status', [AdminKonsultasiPenyakitController::class, 'updateStatus'])
            ->name('admin.konsultasi-penyakit.update-status');

        // DATA MANAGEMENT
        Route::get('/datacreate', [AdminController::class, 'datacreate'])->name('data.create');
        Route::post('/datacreate', [AdminController::class, 'datastore'])->name('data.store');
        Route::get('/{id}/edit', [AdminController::class, 'dataedit'])->name('data.edit');
        Route::put('/{id}', [AdminController::class, 'dataupdate'])->name('data.update');
        Route::delete('/{id}', [AdminController::class, 'datadestroy'])->name('data.destroy');

        // LAPORAN
        Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
        Route::get('/laporan/{tgl_kunjung}', [AdminController::class, 'tgldetail'])->name('admin.tgldetail');
        Route::get('/laporan/poli/{id}', [AdminController::class, 'polidetail']);

        // POLI MANAGEMENT
        Route::get('/poli', [AdminController::class, 'poliindex'])->name('poli.index');
        Route::post('/poli', [AdminController::class, 'polistore'])->name('poli.store');
        Route::get('/poli/{id}/edit', [AdminController::class, 'poliedit'])->name('poli.edit');
        Route::put('/poli/{id}', [AdminController::class, 'poliupdate'])->name('poli.update');
        Route::delete('/poli/{id}', [AdminController::class, 'polidelete'])->name('poli.delete');

        // USER MANAGEMENT
        Route::get('/user', [AdminController::class, 'userindex'])->name('user.index');
        Route::post('/user', [AdminController::class, 'userstore'])->name('user.store');
        Route::get('/user/{id}/edit', [AdminController::class, 'useredit'])->name('user.edit');
        Route::put('/user/{id}', [AdminController::class, 'userupdate'])->name('user.update');
        Route::delete('/user/{id}', [AdminController::class, 'userdelete'])->name('user.delete');
    });

// LOGOUT (untuk semua role)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

@extends('layouts.main')

@section('post')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Edukasi Kesehatan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Edukasi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Edukasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Navigation Menu -->
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-start">
                    <a href="/" class="btn btn-outline-primary me-2">Beranda</a>
                    <a href="/article" class="btn btn-outline-primary me-2">Artikel</a>
                    <a href="/edukasi" class="btn btn-primary">Edukasi</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Category Title -->
                <div class="mb-4">
                    <h2 class="text-uppercase fw-bold text-primary">EDUKASI KESEHATAN</h2>
                    <p class="text-muted">Informasi lengkap tentang layanan kesehatan bidan</p>
                </div>

                <!-- Edukasi Sunat Modern -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Edukasi Sunat Modern</h3>
                        <p class="card-text">Informasi lengkap tentang prosedur sunat modern, keuntungan, dan perawatan pasca sunat berdasarkan jurnal terkini. Sunat modern menawarkan teknik yang lebih nyaman dengan risiko minimal.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary">SUNAT MODERN</span>
                            <small class="text-muted">Update Terakhir: 01 Jun 2025</small>
                        </div>
                        <a href="{{ route('edukasi.sunat') }}" class="btn btn-primary mt-3">Pelajari Selengkapnya</a>
                    </div>
                </div>

                <!-- Edukasi Imunisasi Anak -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Edukasi Imunisasi Anak</h3>
                        <p class="card-text">Panduan lengkap jadwal imunisasi, manfaat, dan efek samping vaksinasi untuk anak-anak berdasarkan rekomendasi IDAI. Imunisasi penting untuk mencegah penyakit berbahaya.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success">IMUNISASI</span>
                            <small class="text-muted">Update Terakhir: 15 Mei 2025</small>
                        </div>
                        <a href="{{ route('edukasi.imunisasi') }}" class="btn btn-primary mt-3">Pelajari Selengkapnya</a>
                    </div>
                </div>

                <!-- Edukasi Periksa Kehamilan -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Edukasi Periksa Kehamilan</h3>
                        <p class="card-text">Informasi penting tentang pemeriksaan kehamilan rutin, nutrisi ibu hamil, dan persiapan persalinan. Pemeriksaan rutin membantu memantau kesehatan ibu dan janin.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-info">KEHAMILAN</span>
                            <small class="text-muted">Update Terakhir: 20 Mei 2025</small>
                        </div>
                        <a href="{{ route('edukasi.kehamilan') }}" class="btn btn-primary mt-3">Pelajari Selengkapnya</a>
                    </div>
                </div>

                <!-- Edukasi Konsultasi Penyakit -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Edukasi Konsultasi Penyakit</h3>
                        <p class="card-text">Panduan mengenali gejala penyakit umum, penanganan pertama, dan kapan harus berkonsultasi dengan bidan. Deteksi dini dapat mencegah komplikasi serius.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-warning text-dark">KONSULTASI</span>
                            <small class="text-muted">Update Terakhir: 10 Mei 2025</small>
                        </div>
                        <a href="{{ route('edukasi.konsultasi') }}" class="btn btn-primary mt-3">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Kategori Edukasi</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                SUNAT MODERN
                                <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                IMUNISASI ANAK
                                <span class="badge bg-success rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                PERIKSA KEHAMILAN
                                <span class="badge bg-info rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                KONSULTASI PENYAKIT
                                <span class="badge bg-warning rounded-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Edukasi Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('edukasi.sunat') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Edukasi Sunat Modern</h6>
                                    <small>1 Jun 2025</small>
                                </div>
                                <small>SUNAT MODERN</small>
                            </a>
                            <a href="{{ route('edukasi.imunisasi') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Edukasi Imunisasi Anak</h6>
                                    <small>15 Mei 2025</small>
                                </div>
                                <small>IMUNISASI</small>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Layanan Terkait</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <div class="dropdown">
                                <button class="list-group-item list-group-item-action dropdown-toggle d-flex align-items-center"
                                    type="button" id="dropdownLayanan"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-stethoscope me-2"></i>Layanan Kesehatan
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownLayanan">
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/pengunjung/sunat-modern') }}">
                                            <i class="fas fa-cut me-2"></i>Sunat Modern
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/pengunjung/imunisasi-anak') }}">
                                            <i class="fas fa-syringe me-2"></i>Imunisasi Anak
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('periksa-kehamilan.form') }}">
                                            <i class="fas fa-baby me-2"></i>Periksa Kehamilan
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/pengunjung/konsultasi-penyakit') }}">
                                            <i class="fas fa-comment-medical me-2"></i>Konsultasi Penyakit
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-edit me-2"></i>Pendaftaran Online
                            </a>
                            <a href="/contact" class="list-group-item list-group-item-action">
                                <i class="fas fa-phone me-2"></i>Kontak Bidan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edukasi End -->

@endsection
@extends('layouts.main')

@section('post')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Pentingnya Imunisasi Dasar Lengkap</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/article">Edukasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Imunisasi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Article Detail Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Article Content -->
                <div class="mb-5">
                    <img src="{{ asset('img/imunisasi-anak.jpg') }}" class="img-fluid rounded mb-4" alt="Imunisasi Anak">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-primary"><i class="far fa-calendar-alt me-2"></i>11 Nov 2022</span>
                        <span class="text-primary"><i class="far fa-user me-2"></i>Sumber Jurnal : Tim Kesehatan Masyarakat</span>
                    </div>
                    
                    <h2 class="mb-4">Pentingnya Imunisasi Dasar Lengkap Pada Bayi dan Balita</h2>
                    
                    <p>Program imunisasi memiliki tujuan untuk menurunkan angka kejadian penyakit dan angka kematian akibat penyakit yang dapat dicegah dengan imunisasi (PD31). Pada saat ini penyakit-penyakit tersebut adalah disentri, tetanus, batu rejan (pertusis), cacar (measles), polio, dan tuberculosis.</p>
                    
                    <h4 class="mt-4">Manfaat Imunisasi</h4>
                    <p>Imunisasi merupakan pencegahan primer terhadap penyakit infeksi yang paling efektif. Imunisasi melindungi individu dari penyakit yang serius dan mencegah penyebaran penyakit menular. Imunisasi adalah salah satu upaya untuk meningkatkan kekebalan tubuh dan pemberantasan penyakit menular. Pemberian imunisasi pada bayi dan balita dapat meningkatkan imunitas.</p>
                    
                    <h4 class="mt-4">Fakta Tentang Imunisasi di Indonesia</h4>
                    <p>Data Riset Kesehatan Dasar tahun 2018 menunjukkan cakupan Imunisasi Dasar Lengkap (IDL) mencapai 57,9%, imunisasi tidak lengkap sebesar 32,9% dan 9,2% tidak diimunisasi. Angka ini menunjukkan masih banyak anak-anak yang belum mendapatkan perlindungan optimal dari penyakit berbahaya.</p>
                    
                    <div class="row g-4 my-4">
                        <div class="col-md-6">
                            <h5>Jenis Imunisasi Dasar:</h5>
                            <ul>
                                <li>Hepatitis B</li>
                                <li>BCG (Tuberkulosis)</li>
                                <li>Polio</li>
                                <li>DPT (Difteri, Pertusis, Tetanus)</li>
                                <li>Campak</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('img/jadwal-imunisasi.jpg') }}" class="img-fluid rounded" alt="Jadwal Imunisasi">
                        </div>
                    </div>
                    
                    <h4 class="mt-4">Mengapa Masih Banyak Anak Tidak Diimunisasi?</h4>
                    <p>Berdasarkan hasil survey, masih terdapat bayi dan balita yang tidak diimunisasi dasar lengkap yang disebabkan oleh:</p>
                    <ul>
                        <li>Kurangnya pengetahuan ibu mengenai pentingnya imunisasi dasar lengkap</li>
                        <li>Adanya ketakutan ibu mengenai efek samping yang muncul setelah imunisasi</li>
                        <li>Faktor sosial ekonomi dan akses ke fasilitas kesehatan</li>
                    </ul>
                    
                    <h4 class="mt-4">Dampak Tidak Imunisasi</h4>
                    <p>Anak yang tidak mendapatkan imunisasi lengkap berisiko tinggi terkena penyakit berbahaya yang sebenarnya bisa dicegah. Jika terjadi wabah penyakit menular, maka hal ini akan meningkatkan angka kematian bayi dan balita.</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Edukasi Lainnya</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="/edukasi/sunat" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Khitan Modern</h6>
                                    <small class="text-muted">25 Mar 2022</small>
                                </div>
                                <small class="text-muted">Metode Sunathrone Klamp</small>
                            </a>
                            <a href="/edukasi/kehamilan" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Pentingnya Pemeriksaan ANC</h6>
                                    <small class="text-muted">24 Agu 2022</small>
                                </div>
                                <small class="text-muted">Untuk Ibu Hamil</small>
                            </a>
                            <a href="/edukasi/konsultasi" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Telemedicine untuk Wilayah Pesisir</h6>
                                    <small class="text-muted">15 Jan 2023</small>
                                </div>
                                <small class="text-muted">Konsultasi Kesehatan</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Article Detail End -->
@endsection
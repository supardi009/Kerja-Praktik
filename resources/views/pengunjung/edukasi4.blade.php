@extends('layouts.main')

@section('post')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Edukasi Konsultasi dengan Bidan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/article">Edukasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
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
                    <img src="{{ asset('img/telemedicine.jpg') }}" class="img-fluid rounded mb-4" alt="Telemedicine">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-primary"><i class="far fa-calendar-alt me-2"></i>15 Jan 2023</span>
                        <span class="text-primary"><i class="far fa-user me-2"></i>Sumber Jurnal : Ian R Tofure, dkk</span>
                    </div>
                    
                    <h2 class="mb-4">Telemedicine Sebagai Media Konsultasi Layanan Kesehatan Bagi Masyarakat di Wilayah Pesisir</h2>
                    
                    <p>Telemedicine telah muncul sebagai solusi inovatif dalam penyediaan layanan kesehatan, terutama di wilayah pesisir yang sering menghadapi keterbatasan akses dan fasilitas medis. Di daerah-daerah pesisir, tantangan utama termasuk jarak yang jauh dari pusat layanan kesehatan, infrastruktur yang terbatas, serta kesulitan dalam mengakses perawatan medis yang memadai.</p>
                    
                    <h4 class="mt-4">Apa Itu Telemedicine?</h4>
                    <p>Telemedicine merupakan praktik kesehatan yang memanfaatkan komunikasi audio, visual dan data untuk berbagai tujuan termasuk perawatan, diagnosis, konsultasi, pengobatan, serta pertukaran informasi medis dan diskusi ilmiah secara jarak jauh. Dengan pendekatan ini, penyedia layanan kesehatan dapat memberikan dukungan yang diperlukan kepada pasien tanpa harus bertemu secara langsung.</p>
                    
                    <div class="row g-4 my-4">
                        <div class="col-md-6">
                            <img src="{{ asset('img/sistem-telemedicine.jpg') }}" class="img-fluid rounded" alt="Sistem Telemedicine">
                        </div>
                        <div class="col-md-6">
                            <h5>Komponen Utama Telemedicine:</h5>
                            <ul>
                                <li>Internet/Jaringan Komputer</li>
                                <li>Satellite</li>
                                <li>Telepon Seluler (Ponsel)</li>
                                <li>Plug-play device</li>
                                <li>Teknologi multimedia</li>
                            </ul>
                        </div>
                    </div>
                    
                    <h4 class="mt-4">Manfaat Telemedicine untuk Masyarakat Pesisir</h4>
                    <p>Masyarakat pesisir adalah kelompok orang yang tinggal di batas antara daratan dan lautan. Mayoritas dari mereka bergantung pada hasil laut untuk kehidupan sehari-hari. Telemedicine menawarkan berbagai manfaat bagi mereka:</p>
                    <ol>
                        <li>Memungkinkan konsultasi dengan dokter tanpa harus melakukan perjalanan jauh</li>
                        <li>Mengakses informasi kesehatan yang lebih banyak</li>
                        <li>Menghemat biaya transportasi ke fasilitas kesehatan</li>
                        <li>Memfasilitasi pemantauan penyakit kronis secara berkala</li>
                        <li>Memberikan dukungan psikologis jarak jauh</li>
                        <li>Meningkatkan kualitas layanan kesehatan melalui konsultasi dengan spesialis</li>
                    </ol>
                    
                    <h4 class="mt-4">Perubahan Interaksi Dokter-Pasien</h4>
                    <div class="table-responsive my-4">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Sebelum Era Teknologi</th>
                                    <th>Era Teknologi Informasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kontak fisik</td>
                                    <td>Kontak non-fisik</td>
                                </tr>
                                <tr>
                                    <td>Interaksi lisan</td>
                                    <td>Interaksi tulis, lisan</td>
                                </tr>
                                <tr>
                                    <td>Langsung</td>
                                    <td>Tak langsung, melalui platform teknologi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h4 class="mt-4">Tantangan Telemedicine</h4>
                    <p>Meskipun memiliki banyak manfaat, telemedicine juga menghadapi beberapa tantangan:</p>
                    <ul>
                        <li>Ketidakmerataan akses internet di Indonesia</li>
                        <li>Banyak masyarakat yang belum terbiasa dengan teknologi</li>
                        <li>Kemungkinan kesalahan diagnosis karena tidak ada pemeriksaan fisik langsung</li>
                        <li>Masalah privasi data pasien</li>
                    </ul>
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
                            <a href="/edukasi/imunisasi" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Pentingnya Imunisasi Dasar Lengkap</h6>
                                    <small class="text-muted">11 Nov 2022</small>
                                </div>
                                <small class="text-muted">Untuk Bayi dan Balita</small>
                            </a>
                            <a href="/edukasi/kehamilan" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Pentingnya Pemeriksaan ANC</h6>
                                    <small class="text-muted">24 Agu 2022</small>
                                </div>
                                <small class="text-muted">Untuk Ibu Hamil</small>
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
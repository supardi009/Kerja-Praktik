@extends('layouts.main')

@section('post')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Pentingnya Pemeriksaan Kehamilan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/article">Edukasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kehamilan</li>
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
                    <img src="{{ asset('img/ibu-hamil.jpg') }}" class="img-fluid rounded mb-4" alt="Ibu Hamil">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-primary"><i class="far fa-calendar-alt me-2"></i>24 Agu 2022</span>
                        <span class="text-primary"><i class="far fa-user me-2"></i>Sumber Jurnal : Siti Komariyah, Aurelia Intan Fitriani</span>
                    </div>
                    
                    <h2 class="mb-4">Edukasi Tentang Pentingnya Pemeriksaan Antenatal Care (ANC) Pada Ibu Hamil</h2>
                    
                    <p>Kesehatan ibu hamil merupakan salah satu indikator kesehatan nasional. Sehingga penurunan angka kematian ibu melahirkan menjadi salah satu dari delapan tujuan yang dirumuskan dalam komitmen international Millenium Development Goals (MDGs) untuk pembangunan jangka panjang kesehatan Indonesia tahun 2005 sampai tahun 2025.</p>
                    
                    <h4 class="mt-4">Apa Itu Antenatal Care (ANC)?</h4>
                    <p>Antenatal care (ANC) merupakan asuhan yang diberikan saat hamil sampai sebelum melahirkan. ANC adalah sarana kesehatan yang bersifat preventif care yang dikembangkan dengan tujuan untuk mencegah dan mengurangi komplikasi bagi ibu hamil.</p>
                    
                    <h4 class="mt-4">Manfaat Pemeriksaan ANC</h4>
                    <p>ANC dilakukan untuk menjamin agar proses kehamilan berjalan normal, sehingga komplikasi yang mungkin terjadi dapat terdeteksi secara dini serta ditangani secara memadai. Ibu yang tidak mendapatkan asuhan antenatal memiliki risiko lebih tinggi kematian maternal, stillbirth, dan komplikasi kehamilan lainnya.</p>
                    
                    <div class="row g-4 my-4">
                        <div class="col-md-6">
                            <img src="{{ asset('img/pemeriksaan-anc.jpg') }}" class="img-fluid rounded" alt="Pemeriksaan ANC">
                        </div>
                        <div class="col-md-6">
                            <h5>Jadwal Kunjungan ANC yang Dianjurkan:</h5>
                            <ul>
                                <li>Minimal 1 kali pada trimester pertama (sebelum usia kehamilan 14 minggu)</li>
                                <li>Minimal 1 kali pada trimester kedua (usia kehamilan 14-28 minggu)</li>
                                <li>Minimal 2 kali pada trimester ketiga (28-36 minggu dan setelah 36 minggu)</li>
                            </ul>
                        </div>
                    </div>
                    
                    <h4 class="mt-4">Pemeriksaan 10T dalam ANC</h4>
                    <p>Dalam pemeriksaan ANC, terdapat 10 jenis pemeriksaan yang dilakukan (10T):</p>
                    <ol>
                        <li>Timbang berat badan dan tinggi badan</li>
                        <li>Ukur tekanan darah</li>
                        <li>Ukur tinggi fundus uteri</li>
                        <li>Pemberian tablet zat besi</li>
                        <li>Imunisasi tetanus</li>
                        <li>Tes laboratorium</li>
                        <li>Tes terhadap penyakit menular seksual</li>
                        <li>Pemeriksaan status gizi ibu</li>
                        <li>Pemeriksaan kondisi janin</li>
                        <li>Penyuluhan kesehatan</li>
                    </ol>
                    
                    <h4 class="mt-4">Hasil Edukasi ANC</h4>
                    <p>Berdasarkan hasil edukasi yang dilakukan, terjadi peningkatan pengetahuan ibu hamil sebelum dan sesudah dilakukan kegiatan. Pada awal test hanya ditemukan 7,69% ibu hamil yang memiliki pengetahuan baik tentang ANC, setelah kegiatan meningkat menjadi 92,30%.</p>
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
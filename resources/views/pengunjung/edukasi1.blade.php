@extends('layouts.main')

@section('post')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Khitan Modern</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/article">Edukasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Khitan Modern</li>
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
                    <img src="{{ asset('img/sunat-modern.jpg') }}" class="img-fluid rounded mb-4" alt="Khitan Modern">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-primary"><i class="far fa-calendar-alt me-2"></i>25 Mar 2022</span>
                        <span class="text-primary"><i class="far fa-user me-2"></i>Sumber Jurnal : Dewi Ratna Sullstina</span>
                    </div>

                    <h2 class="mb-4">Khitan Ceria: Metode Khitan Modern untuk Yatim dan Dhuafa</h2>

                    <p>Khitan atau sunat tidak hanya terkait kewajiban dalam agama Islam saja, tetapi juga bisa bermanfaat bagi kesehatan. Dalam kehidupan bermasyarakat, masih banyak ditemui sunat konvensional di tengah majunya kecanggihan inovasi medis.</p>

                    <h4 class="mt-4">Manfaat Khitan dari Segi Kesehatan</h4>
                    <p>Tujuan dari sunat adalah membuang mukosa untuk mencegah risiko berbagai penyakit. Mukosa adalah lapisan paling dalam dari kulup yang melindungi penis. Budaya masyarakat di pedesaan masih melakukan tindakan turun temurun untuk melakukan khitan pada anak. Sebagian juga masih menggunakan dukun sunat tanpa latar belakang pendidikan medis dengan berbekal pisau dan jahitan.</p>

                    <h4 class="mt-4">Metode Sunathrone Klamp</h4>
                    <p>Metode khitan modern dengan teknik klem yang terbuat dari polycarbonate, lebih efisien membuat luka pasca khitan lebih cepat kering dan tidak nyeri lagi. Selain itu, perdarahan juga jauh lebih minimal, tanpa jahitan, proses penyembuhan luka lebih cepat, serta lebih higienis dan aman.</p>

                    <div class="row g-4 my-4">
                        <div class="col-md-6">
                            <img src="{{ asset('img/sunat-alat.jpg') }}" class="img-fluid rounded" alt="Alat Khitan Modern">
                            <p class="text-center mt-2"><small>Beberapa jenis alat sunat Klamp Modern</small></p>
                        </div>
                        <div class="col-md-6">
                            <h5>Keunggulan Metode Modern:</h5>
                            <ul>
                                <li>Minim perdarahan</li>
                                <li>Tidak menggunakan jahitan</li>
                                <li>Proses penyembuhan cepat</li>
                                <li>Kurang nyeri dibanding metode konvensional</li>
                                <li>Lebih higienis dan aman</li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="mt-4">Perawatan Pasca Khitan</h4>
                    <ul>
                        <li>Segera minum obat analgesik</li>
                        <li>Menjaga kebersihan daerah penis</li>
                        <li>Usahakan tidak bergerak terlalu aktif</li>
                        <li>Kontrol dan melepas perban</li>
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
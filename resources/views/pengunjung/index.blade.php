@extends('layouts.main')

@section('post')

<!-- Header Start -->
<div class="container-fluid header bg-primary p-0 mb-5">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 text-white mb-5">Kebutuhan Sehat Anda, Praktik Mandiri Bidan Nani Herawati</h1>
            <div class="row g-4">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('home/img/carousel-1.jpg') }}" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Pelayanan Bidan Nani Herawati</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('home/img/carousel-2.jpg') }}" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Pelayanan Kesehatan Ibu dan Anak</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('home/img/carousel-3.jpg') }}" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Pelayanan Kesehatan Lingkungan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('home/img/about-1.jpg') }}" alt="">
                    <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('home/img/about-2.jpg') }}" alt="" style="margin-top: -25%;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                <h1 class="mb-4">Menjaga Kesehatan Ibu dan Anak Bersama Bidan Nani Herawati</h1>
                <p>Bidan Nani Herawati adalah penyedia layanan kesehatan yang berfokus pada perawatan ibu, bayi, dan anak dengan pendekatan ramah, aman, dan profesional.</p>
                <p class="mb-4">Memilih bidan yang tepat merupakan langkah penting dalam memastikan kesehatan ibu dan buah hati. Datang dan rasakan sendiri pelayanan terbaik dari Bidan Nani Herawati yang peduli pada setiap tahap kehidupan Anda.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Pendampingan kehamilan secara menyeluruh dan personal</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Persalinan yang aman dan nyaman</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Layanan imunisasi dan tumbuh kembang anak</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Edukasi kesehatan untuk keluarga</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9f5ff 100%);">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="d-inline-block bg-primary text-white rounded-pill py-2 px-4 mb-3">Layanan Profesional</span>
            <h1 class="display-5 fw-bold mb-4">Pelayanan Kesehatan Ibu & Anak Terbaik</h1>
            <p class="lead">Dengan pendekatan modern, nyaman, dan profesional oleh bidan berpengalaman</p>
        </div>

        <div class="row g-4">
            <!-- Sunat Modern -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card bg-white rounded-4 h-100 p-4 shadow-sm border-0 position-relative overflow-hidden">
                    <div class="icon-wrapper bg-primary-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fas fa-baby text-white fs-3"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Sunat Modern Tanpa Jahitan</h4>
                    <p class="mb-4 text-muted">Proses cepat hanya 15 menit dengan teknik terkini yang minim perdarahan dan nyeri. Alat steril sekali pakai untuk keamanan maksimal.</p>
                    <div class="highlight-badge bg-primary text-white py-1 px-3 rounded-pill d-inline-block">Bebas Trauma</div>
                    <div class="service-overlay"></div>
                </div>
            </div>

            <!-- Imunisasi -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-card bg-white rounded-4 h-100 p-4 shadow-sm border-0 position-relative overflow-hidden">
                    <div class="icon-wrapper bg-success-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fas fa-syringe text-white fs-3"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Paket Imunisasi Lengkap</h4>
                    <p class="mb-4 text-muted">Proteksi optimal untuk buah hati dengan jadwal imunisasi yang terprogram. Termasuk vaksin BCG, DPT, Hepatitis, Campak, dan lainnya.</p>
                    <div class="highlight-badge bg-success text-white py-1 px-3 rounded-pill d-inline-block">Harga Terjangkau</div>
                    <div class="service-overlay"></div>
                </div>
            </div>

            <!-- Kehamilan -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card bg-white rounded-4 h-100 p-4 shadow-sm border-0 position-relative overflow-hidden">
                    <div class="icon-wrapper bg-danger-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fas fa-baby-carriage text-white fs-3"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Periksa Kehamilan Premium</h4>
                    <p class="mb-4 text-muted">Paket ANC lengkap termasuk USG, cek laboratorium, dan konsultasi gizi. Pantau perkembangan janin dengan teknologi modern.</p>
                    <div class="highlight-badge bg-danger text-white py-1 px-3 rounded-pill d-inline-block">Trimester 1-3</div>
                    <div class="service-overlay"></div>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-card bg-white rounded-4 h-100 p-4 shadow-sm border-0 position-relative overflow-hidden">
                    <div class="icon-wrapper bg-warning-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fas fa-clinic-medical text-white fs-3"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Fasilitas Premium</h4>
                    <p class="mb-4 text-muted">Ruang praktik steril dengan peralatan medis lengkap. Area bermain anak dan ruang tunggu nyaman dengan free WiFi.</p>
                    <div class="highlight-badge bg-warning text-dark py-1 px-3 rounded-pill d-inline-block">Higienis</div>
                    <div class="service-overlay"></div>
                </div>
            </div>

            <!-- KB & Konsultasi -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card bg-white rounded-4 h-100 p-4 shadow-sm border-0 position-relative overflow-hidden">
                    <div class="icon-wrapper bg-info-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fas fa-comments text-white fs-3"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Konsultasi KB & Laktasi</h4>
                    <p class="mb-4 text-muted">Solusi tepat untuk perencanaan keluarga dan masalah menyusui. Tersedia berbagai pilihan kontrasepsi dan teknik laktasi.</p>
                    <div class="highlight-badge bg-info text-white py-1 px-3 rounded-pill d-inline-block">Privasi Terjaga</div>
                    <div class="service-overlay"></div>
                </div>
            </div>

            <!-- Paket Newborn -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-card bg-white rounded-4 h-100 p-4 shadow-sm border-0 position-relative overflow-hidden">
                    <div class="icon-wrapper bg-purple-gradient rounded-circle mb-4" style="width: 70px; height: 70px;">
                        <i class="fas fa-baby text-white fs-3"></i> <!-- Ganti ikon dengan yang lebih umum tersedia -->
                    </div>
                    <h4 class="mb-3 fw-bold">Perawatan Bayi Baru Lahir</h4>
                    <p class="mb-4 text-muted">Perawatan tali pusat, pemijatan bayi, hingga konsultasi tumbuh kembang. Dilengkapi dengan kelas parenting untuk orang tua baru.</p>
                    <div class="highlight-badge bg-purple text-white py-1 px-3 rounded-pill d-inline-block">Bundling Hemat</div>
                    <div class="service-overlay"></div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.7s">
            <a href="{{ url('/pengunjung/konsultasi-penyakit') }}" class="btn btn-primary btn-lg rounded-pill px-4 py-2 me-3">
                <i class="fas fa-calendar-check me-2"></i> Buat Janji Temu
            </a>
            <a href="https://wa.me/6281315848385" class="btn btn-outline-primary btn-lg rounded-pill px-4 py-2">
                <i class="fas fa-phone-alt me-2"></i> Hubungi Kami
            </a>
        </div>
    </div>
</div>

<style>
    .service-card {
        transition: all 0.3s ease;
        border-top: 4px solid transparent;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        border-top: 4px solid var(--bs-primary);
    }

    .icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .bg-primary-gradient {
        background: linear-gradient(45deg, #4e73df, #224abe);
    }

    .bg-success-gradient {
        background: linear-gradient(45deg, #1cc88a, #13855c);
    }

    .bg-danger-gradient {
        background: linear-gradient(45deg, #e74a3b, #be2617);
    }

    .bg-warning-gradient {
        background: linear-gradient(45deg, #f6c23e, #dda20a);
    }

    .bg-info-gradient {
        background: linear-gradient(45deg, #36b9cc, #258391);
    }

    .bg-purple-gradient {
        background: linear-gradient(45deg, #6f42c1, #4e2d8c);
    }

    .bg-purple {
        background-color: #6f42c1 !important;
    }

    .service-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--bs-primary), var(--bs-success));
        opacity: 0;
        transition: all 0.3s ease;
    }

    .service-card:hover .service-overlay {
        opacity: 1;
        height: 8px;
    }
</style>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <p class="d-inline-block border rounded-pill text-light py-1 px-4">Fitur Unggulan</p>
                    <h1 class="text-white mb-4">Mengapa Memilih Praktik Mandiri Bidan Nani Herawati?</h1>
                    <p class="text-white mb-4 pb-2">Praktik Mandiri Bidan Nani Herawati hadir sebagai pusat pelayanan kesehatan ibu dan anak yang mengutamakan kenyamanan, keamanan, dan kualitas pelayanan. Kami berkomitmen memberikan layanan yang menyeluruh mulai dari pemeriksaan kehamilan, persalinan normal, konsultasi kesehatan reproduksi, hingga edukasi parenting dan pola hidup sehat bagi ibu dan keluarga.</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-user-md text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Berpengalaman</p>
                                    <h5 class="text-white mb-0">Bidan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-check text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Berkualitas</p>
                                    <h5 class="text-white mb-0">Pelayanan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-comment-medical text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Terjangkau</p>
                                    <h5 class="text-white mb-0">Biaya</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-headphones text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">24 Jam</p>
                                    <h5 class="text-white mb-0">Siap Melayani</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('home/img/feature.jpg') }}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Team Start -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <!-- Header dengan Animasi -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <p class="d-inline-block border rounded-pill py-1 px-4 bg-primary text-white fw-bold">Bidan Profesional</p>
            <h1 class="display-5 fw-bold text-dark mt-3">Bidan Nani Herawati, Str.Keb</h1>
            <p class="lead text-muted">Pendamping Setiap Langkah Kehamilan & Persalinan Anda</p>
        </div>

        <div class="row g-5 align-items-center">
            <!-- Foto Profil dengan Overlay Quote -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('home/img/team-2.jpg') }}" alt="Bidan Nani Herawati" style="border: 5px solid #fff; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                    <div class="position-absolute bottom-0 start-0 bg-primary text-white p-4 w-100" style="opacity: 0.9;">
                        <h5 class="mb-0">"Setiap kehamilan adalah cerita unik yang layak didampingi dengan hati."</h5>
                    </div>
                </div>
            </div>

            <!-- Konten Utama: Perkenalan + Tips + CTA -->
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white p-5 rounded-lg shadow">
                    <!-- Perkenalan Diri -->
                    <div class="mb-4">
                        <h3 class="text-primary mb-3">👋 Halo, Saya Bidan Nani!</h3>
                        <p class="mb-0">Dengan <span class="fw-bold text-danger">10+ tahun pengalaman</span>, saya berkomitmen memberikan layanan kebidanan yang <span class="fw-bold">ramah, profesional, dan berbasis bukti</span>. Dari konsultasi kehamilan hingga perawatan pasca melahirkan, saya siap mendukung Anda.</p>
                    </div>

                    <!-- Tips Kesehatan (Dengan Icon) -->
                    <div class="mb-4 py-3 px-4 bg-light rounded border-start border-4 border-primary">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-primary rounded-circle p-2 me-3">
                                <i class="fas fa-lightbulb text-white"></i>
                            </span>
                            <h5 class="mb-0 text-dark">Tips Bidan Hari Ini:</h5>
                        </div>
                        <p class="mb-0">💡 <span class="fw-bold">Jadwalkan ANC rutin!</span> Pemeriksaan kehamilan minimal <span class="text-danger">4 kali</span> membantu deteksi dini risiko dan memastikan persalinan aman.</p>
                    </div>

                    <!-- Layanan Unggulan (Grid) -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex p-3 bg-light-primary rounded">
                                <i class="fas fa-baby text-primary me-3 mt-1"></i>
                                <span>Kelas Persiapan Persalinan</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex p-3 bg-light-primary rounded">
                                <i class="fas fa-stethoscope text-primary me-3 mt-1"></i>
                                <span>Konseling ASI Eksklusif</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Menonjol -->
                    <div class="text-center">
                        <a href="{{ url('/pengunjung/konsultasi-penyakit') }}" class="btn btn-primary btn-lg rounded-pill px-4 py-2 me-3">
                            <i class="fas fa-calendar-check me-2"></i> Buat Janji
                        </a>
                        <a href="https://wa.me/6281315848385" class="btn btn-success btn-lg rounded-pill px-4 py-2">
                            <i class="fab fa-whatsapp me-2"></i> Konsultasi via WA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection<!-- End #section -->
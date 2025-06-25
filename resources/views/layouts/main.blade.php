<!DOCTYPE html>
<html lang="en">

@stack('styles')

<head>
    <meta charset="utf-8">
    <title>Bidan Nani Herawati | {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('home/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">

    <!-- Template SweetAlert -->
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>
                        <a href="https://www.google.com/maps?q=-6.395808219909668,106.76136779785156&z=17&hl=en" target="_blank" class="text-decoration-none">
                            Sawangan, Depok
                        </a>
                    </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Sen - Min : 08.00 - 15.00</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="https://wa.me/6281315848385" style="text-decoration: none; color: inherit;">+6281315848385</a></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary">
                <img src="{{ asset('img/logo-bidan.png') }}" alt="Logo Bidan" class="me-3" style="height: 2em;">
                Bidan Nani Herawati
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ ($title === 'Beranda' ? 'active' : '') }}">Beranda</a>
                <a href="{{ url('/article') }}" class="nav-item nav-link {{ ($title === 'Tentang Kami' ? 'active' : '') }}">Edukasi</a>

                <!-- Updated Layanan dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ ($title === 'Layanan Kami' ? 'active' : '') }}" data-bs-toggle="dropdown" style="position: relative;">Layanan</a>
                    <div class="dropdown-menu p-0" style="
                    min-width: 400px;
                    border: none;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    border-radius: 0 0 8px 8px;
                    overflow: hidden;
                    margin-top: 0;
                ">
                        <div style="padding: 0.5rem 0;">
                            <div class="row g-0">
                                <!-- PELAYANAN UTAMA -->
                                <div class="col-md-6" style="padding: 0 0.5rem;">
                                    <div style="
                                    padding: 0.5rem 1rem;
                                    font-size: 0.8rem;
                                    font-weight: 600;
                                    color: #0d6efd;
                                    text-transform: uppercase;
                                    letter-spacing: 0.5px;
                                ">PELAYANAN UTAMA</div>
                                    <a href="{{ url('/pengunjung/sunat-modern') }}" style="
                                    display: block;
                                    padding: 0.5rem 1rem;
                                    color: #212529;
                                    text-decoration: none;
                                    transition: all 0.2s;
                                " onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                                        Sunat Modern
                                    </a>
                                    <a href="{{ url('/pengunjung/imunisasi-anak') }}" style="
                                    display: block;
                                    padding: 0.5rem 1rem;
                                    color: #212529;
                                    text-decoration: none;
                                    transition: all 0.2s;
                                " onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                                        Imunisasi Anak
                                    </a>
                                    <a href="{{ route('periksa-kehamilan.form') }}"
                                        style="display: block; padding: 0.5rem 1rem; color: #212529; text-decoration: none; transition: all 0.2s;"
                                        onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                                        Periksa Kehamilan
                                    </a>
                                </div>

                                <!-- PELAYANAN LAIN -->
                                <div class="col-md-6" style="padding: 0 0.5rem;">
                                    <div style="
                                    padding: 0.5rem 1rem;
                                    font-size: 0.8rem;
                                    font-weight: 600;
                                    color: #0d6efd;
                                    text-transform: uppercase;
                                    letter-spacing: 0.5px;
                                ">PELAYANAN LAIN</div>

                                    <a href="{{ url('/pengunjung/konsultasi-penyakit') }}" style="
                                    display: block;
                                    padding: 0.5rem 1rem;
                                    color: #212529;
                                    text-decoration: none;
                                    transition: all 0.2s;
                                " onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                                        Konsultasi Penyakit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('pengunjung.notifikasi') }}" class="nav-item nav-link {{ ($title === 'Notifikasi Sunat Modern' ? 'active' : '') }}"> Notifikasi</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link {{ ($title === 'Hubungi Kami' ? 'active' : '') }}">Hubungi Kami</a>
            </div>
            @auth
            <!-- Dropdown menu when logged in -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle me-1" style="font-size: 1.5em;"></i>
                </a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item"></a>
                    <a href="#" class="dropdown-item"></a>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @else
            <!-- Login icon when not logged in -->
            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block me-3">
                <i class="fas fa-user me-2"></i>Login
            </a>
            @endauth
        </div>
    </nav>
    <!-- Navbar End -->
    <style>
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-nav .dropdown-menu {
                min-width: 100% !important;
                box-shadow: none !important;
                border-radius: 0 !important;
            }

            .navbar-nav .dropdown-menu .row {
                display: block !important;
                margin: 0 !important;
            }

            .navbar-nav .dropdown-menu .col-md-6 {
                width: 100% !important;
                padding: 0 !important;
            }
        }
    </style>

    @yield('post')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Alamat</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a href="https://www.google.com/maps?q=-6.395808219909668,106.76136779785156&z=17&hl=en" target="_blank">Sawangan, Depok</a></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="https://wa.me/6281315848385" class="text-white" target="_blank">+6281315848385</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:herawatinani434@gmail.com" style="color: white; text-decoration: none;">herawatinani434@gmail.com</a></p>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Layanan</h5>
                    <a class="btn btn-link" href="{{ url('/pengunjung/sunat-modern') }}">Sunat Modern</a>
                    <a class="btn btn-link" href="{{ url('/pengunjung/imunisasi-anak') }}">Imunisasi Anak</a>
                    <a class="btn btn-link" href="{{ url('/pengunjung/periksa-kehamilan') }}">Periksa Kehamilan</a>
                    <a class="btn btn-link" href="{{ url('/pengunjung/konsultasi-penyakit') }}">Konsultasi Penyakit</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Butuh Bantuan?</h5>
                    <a class="btn btn-link" href="{{ url('/contact') }}">Hubungi Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Kirim Ulasan</h5>
                    <p>Ulas Kami Dengan Memberikan Pengalaman Anda Melalui Email Kami</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('home/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('home/js/main.js') }}"></script>

    <!-- Template SweetAlert -->
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
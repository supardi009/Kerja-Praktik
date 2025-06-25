@extends('layouts.main')

@section('post')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Hubungi Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">

            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="display-6 fw-bold text-primary">Hubungi Kami</h2>
            <p class="lead">Kami siap membantu Anda kapan saja</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100 bg-white rounded d-flex align-items-center p-4 shadow-sm hover-top">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 60px; height: 60px;">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-1">Alamat</h5>
                        <a href="https://www.google.com/maps?q=-6.395808219909668,106.76136779785156&z=17&hl=en"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-decoration-none">
                            <p class="mb-0 text-dark hover-text-primary">Sawangan, Depok<i class="fas fa-external-link-alt ms-1 small"></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a href="https://wa.me/6281315848385" class="text-decoration-none">
                    <div class="h-100 bg-white rounded d-flex align-items-center p-4 shadow-sm hover-top">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 60px; height: 60px;">
                            <i class="fas fa-phone-alt fa-lg"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-1 text-dark">Telepon/WhatsApp</h5>
                            <p class="mb-0 text-dark hover-text-primary">+62 813-1584-8385 <i class="fab fa-whatsapp ms-1 text-success"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100 bg-white rounded d-flex align-items-center p-4 shadow-sm hover-top">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 60px; height: 60px;">
                        <i class="fas fa-envelope fa-lg"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-1">Email</h5>
                        <a href="mailto:herawatinani434@gmail.com" class="text-decoration-none">
                            <p class="mb-0 text-dark hover-text-primary">herawatinani434@gmail.com <i class="fas fa-paper-plane ms-1 text-primary"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.7s">
            <p class="mb-2">Atau kunjungi media sosial kami:</p>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-square btn-primary mx-1"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-square btn-primary mx-1"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-square btn-primary mx-1"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-square btn-primary mx-1"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection<!-- End #section -->
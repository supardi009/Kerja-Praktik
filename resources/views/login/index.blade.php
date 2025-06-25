<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Layanan Bidan Nani Herawati | {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('dashboard/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @if(session()->has('loginError'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <strong class="me-auto">Login Error</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body bg-light">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-exclamation-circle text-danger me-3 fs-4"></i>
                        <div>
                            <h6 class="mb-1 text-danger">Invalid Credentials</h6>
                            <p class="mb-0">{{ session('loginError') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body bg-light">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle text-success me-3 fs-4"></i>
                        <div>
                            <h6 class="mb-1 text-success">Operation Successful</h6>
                            <p class="mb-0">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/" class="">
                                <h3 class="text-primary">Login & Daftar</h3>
                            </a>
                            <h3></h3>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="name@example.com" required>
                                <label for="email">Alamat Email Anda</label>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                <label for="password">Kata Sandi</label>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Masuk</button>
                        </form>

                        <p class="text-center mb-0">Belum Punya Akun? <a href="{{ route('register') }}">Silahkan Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
</body>

</html>
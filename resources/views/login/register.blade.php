@extends('login.index')

@section('content')
<div class="login-container">
    <div class="login-header">
        <a href="index.html" class="brand-logo">
            <i class="fas fa-user-nurse"></i>
            <h3>Bidan Nani Herawati</h3>
        </a>
    </div>

    <div class="login-form">
        <h4 class="text-center mb-4" style="color: var(--text-color);">Buat Akun Baru</h4>
        <p class="text-center mb-4" style="color: var(--text-color);">Silakan isi form pendaftaran</p>

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-floating mb-3">
                <input name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                <label for="name">Nama Lengkap</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required>
                <label for="email">Alamat Email</label>
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

            <div class="form-floating mb-4">
                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Konfirmasi Password" required>
                <label for="password-confirm">Konfirmasi Kata Sandi</label>
            </div>

            <button class="w-100 btn btn-primary mb-3" type="submit">
                <i class="fas fa-user-plus me-2"></i>DAFTAR
            </button>

            <div class="text-center">
                <p style="color: var(--text-color);">Sudah punya akun? <a href="{{ route('login') }}" style="color: var(--primary-color); text-decoration: none;">Masuk disini</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('post')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(!request()->has('showForm'))
                <!-- Edukasi Section -->
                <div class="mb-5">
                    <h1 class="text-primary mb-4">Konsultasi Penyakit</h1>
                    <p class="mb-4">Konsultasi penyakit dengan bidan profesional dapat membantu Anda memahami kondisi kesehatan Anda dengan lebih baik. Bidan kami memiliki pengetahuan yang memadai untuk memberikan saran awal dan merujuk Anda ke dokter spesialis jika diperlukan.</p>

                    <h4 class="text-primary mb-3">Manfaat Konsultasi Penyakit dengan Bidan:</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Pemahaman awal tentang gejala yang dialami</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Saran perawatan dasar untuk kondisi umum</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Rujukan tepat ke dokter spesialis jika diperlukan</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Pendampingan dalam proses pengobatan</li>
                    </ul>

                    <div class="text-center mt-5">
                        <a href="?showForm=true" class="btn btn-primary py-3 px-5">Yuk Daftarkan Segera di Bidan</a>
                    </div>
                </div>
                @else
                <!-- Form Section -->
                <div class="bg-light rounded p-5">
                    <h2 class="text-primary mb-4">Form Konsultasi Penyakit</h2>
                    <form method="POST" action="{{ route('konsultasi-penyakit.store') }}">
                        @csrf

                        <!-- Informasi Pasien -->
                        <div class="mb-4">
                            <h4 class="text-primary mb-3">Informasi Pasien</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nomor_telepon" class="form-label">Nomor Telepon/WhatsApp</label>
                                    <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="L" required>
                                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Data Medis & Jadwal -->
                        <div class="mb-4">
                            <h4 class="text-primary mb-3">Data Medis & Jadwal</h4>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="keluhan_utama" class="form-label">Keluhan Utama (Deskripsi Gejala)</label>
                                    <textarea class="form-control" id="keluhan_utama" name="keluhan_utama" rows="3" required></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit Sebelumnya (jika ada)</label>
                                    <textarea class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" rows="2"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="alergi_obat" class="form-label">Alergi Obat (jika ada)</label>
                                    <input type="text" class="form-control" id="alergi_obat" name="alergi_obat">
                                </div>
                                <div class="col-md-6">
                                    <label for="obat_dikonsumsi" class="form-label">Obat yang Sedang Dikonsumsi (opsional)</label>
                                    <input type="text" class="form-control" id="obat_dikonsumsi" name="obat_dikonsumsi">
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_janji" class="form-label">Tanggal Preferensi Janji Temu</label>
                                    <input type="date" class="form-control" id="tanggal_janji" name="tanggal_janji" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="jam_janji" class="form-label">Jam Preferensi Janji Temu</label>
                                    <input type="time" class="form-control" id="jam_janji" name="jam_janji" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary py-3 px-5">Kirim Permohonan Konsultasi</button>
                        </div>
                    </form>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4">Keunggulan Bidan Kami</h4>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-user-md text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5>Profesional</h5>
                            <p>Bidan kami memiliki sertifikasi dan pengalaman yang memadai dalam menangani berbagai keluhan kesehatan.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-heart text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5>Peduli</h5>
                            <p>Kami memberikan perhatian penuh pada setiap keluhan pasien dengan pendekatan yang manusiawi.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5>Tepat Waktu</h5>
                            <p>Pelayanan yang cepat dan tepat sesuai dengan jadwal yang telah disepakati.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5>Privasi Terjaga</h5>
                            <p>Data dan informasi kesehatan Anda akan kami jaga kerahasiaannya.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4">Jam Praktik</h4>
                    <p>Kami siap melayani konsultasi penyakit pada jam berikut:</p>
                    <div class="border-bottom pb-2 mb-2">
                        <p class="mb-0"><i class="far fa-clock text-primary me-2"></i> Senin - Jumat</p>
                        <p class="mb-0">08:00 - 15:00</p>
                    </div>
                    <div class="border-bottom pb-2 mb-2">
                        <p class="mb-0"><i class="far fa-clock text-primary me-2"></i> Sabtu</p>
                        <p class="mb-0">08:00 - 12:00</p>
                    </div>
                    <div>
                        <p class="mb-0"><i class="far fa-clock text-primary me-2"></i> Minggu & Hari Besar</p>
                        <p class="mb-0">Libur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
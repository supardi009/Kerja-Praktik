@extends('layouts.main')

@section('post')

<div class="container-xxl py-5">
    <div class="container">
        <!-- Section 1: Edukasi tentang imunisasi anak -->
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-8">
                <h1 class="display-6 mb-4">Edukasi Imunisasi Anak</h1>
                <p class="mb-4">Imunisasi adalah proses pemberian vaksin untuk membantu sistem kekebalan tubuh anak berkembang perlindungan terhadap penyakit berbahaya. Imunisasi sangat penting untuk kesehatan anak Anda dan masyarakat sekitar.</p>

                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Mencegah penyakit serius</h6>
                                <span>Imunisasi mencegah penyakit serius dan komplikasinya</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Kekebalan kelompok</h6>
                                <span>Membantu membentuk kekebalan kelompok (herd immunity)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Perlindungan optimal</h6>
                                <span>Melindungi anak dari penyakit yang dapat dicegah dengan vaksin</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Masyarakat sehat</h6>
                                <span>Mengurangi risiko penyebaran penyakit di masyarakat</span>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="text-primary mt-5">Jadwal Imunisasi:</h3>
                <p>Berikut adalah jadwal imunisasi dasar yang direkomendasikan oleh IDAI (Ikatan Dokter Anak Indonesia):</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Usia</th>
                                <th>Jenis Imunisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Baru Lahir</td>
                                <td>BCG, Campak-Rubella, DPT, Hepatitis B, Polio, Campak, Hib, Japanese Encephalitis, PCV, Rotavirus</td>
                            </tr>
                            <tr>
                                <td>1 bulan</td>
                                <td>HB-1</td>
                            </tr>
                            <tr>
                                <td>2 bulan</td>
                                <td>DPT-1, Hib-1, Polio 2, PCV-1, Rotavirus</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sidebar: Keunggulan bidan -->
            <div class="col-lg-4">
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Keunggulan Layanan Imunisasi di Bidan Nani Herawati</h2>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-user-md text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Tenaga Profesional</h5>
                            <p>Bidan berpengalaman dan bersertifikat dalam memberikan imunisasi anak</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-syringe text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Vaksin Berkualitas</h5>
                            <p>Menggunakan vaksin yang terjamin kualitasnya dan disimpan dengan standar ketat</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-smile text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Pelayanan Nyaman</h5>
                            <p>Proses imunisasi dilakukan dengan teknik yang membuat anak merasa nyaman</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-heartbeat text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Pemantauan Pasca Imunisasi</h5>
                            <p>Pemantauan efek samping dan konsultasi pasca imunisasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button untuk menampilkan form -->
        <div class="row justify-content-center mb-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-6 text-center">
                <button id="showFormBtn" class="btn btn-primary py-3 px-5">Yuk Daftarkan Segera di Bidan</button>
            </div>
        </div>

        <!-- Form Section (hidden by default) -->
        <div id="formSection" class="row g-5 wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
            <div class="col-lg-12">
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Formulir Imunisasi Anak</h2>

                    <!-- Multi-step form -->
                    <form id="imunisasiForm" method="POST" action="{{ route('imunisasi.submit') }}">
                        @csrf

                        <!-- Step 1: Informasi Data Anak -->
                        <div id="step1" class="form-step">
                            <h4 class="mb-4">1. Informasi Data Anak</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_anak" class="form-label">Nama Lengkap Anak</label>
                                    <input type="text" class="form-control" id="nama_anak" name="nama_anak" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="akta_kelahiran" class="form-label">Nomor Akta Kelahiran/KIA</label>
                                    <input type="text" class="form-control" id="akta_kelahiran" name="akta_kelahiran" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik_anak" class="form-label">NIK Anak</label>
                                    <input type="text" class="form-control" id="nik_anak" name="nik_anak" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step2">Lanjut</button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Data Orang Tua/Wali -->
                        <div id="step2" class="form-step" style="display: none;">
                            <h4 class="mb-4">2. Data Orang Tua/Wali</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_ayah" class="form-label">Nama Ayah/Wali</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_hp" class="form-label">Nomor HP Orang Tua</label>
                                    <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat_ortu" class="form-label">Alamat Orang Tua</label>
                                    <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step1">Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step3">Lanjut</button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Riwayat Kesehatan Anak -->
                        <div id="step3" class="form-step" style="display: none;">
                            <h4 class="mb-4">3. Riwayat Kesehatan Anak</h4>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="riwayat_alergi" class="form-label">Riwayat Alergi (jika ada)</label>
                                    <textarea class="form-control" id="riwayat_alergi" name="riwayat_alergi" rows="2"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="kondisi_khusus" class="form-label">Kondisi Kesehatan Khusus (penyakit bawaan, gangguan imun, dll.)</label>
                                    <textarea class="form-control" id="kondisi_khusus" name="kondisi_khusus" rows="2"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_imunisasi" class="form-label">Riwayat Imunisasi Sebelumnya (jika ada)</label>
                                    <textarea class="form-control" id="riwayat_imunisasi" name="riwayat_imunisasi" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step2">Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step4">Lanjut</button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4: Jenis Imunisasi -->
                        <div id="step4" class="form-step" style="display: none;">
                            <h4 class="mb-4">4. Jenis Imunisasi yang Diminta</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="jenis_imunisasi" class="form-label">Pilihan Jenis Imunisasi</label>
                                    <select class="form-select" id="jenis_imunisasi" name="jenis_imunisasi" required>
                                        <option value="">Pilih Jenis Imunisasi</option>
                                        <option value="BCG">BCG (Tuberkulosis)</option>
                                        <option value="Campak-Rubella">Campak-Rubella</option>
                                        <option value="DPT">DPT (Difteri, Pertusis, Tetanus)</option>
                                        <option value="Hepatitis B">Hepatitis B</option>
                                        <option value="Polio">Polio</option>
                                        <option value="Campak">Campak</option>
                                        <option value="Hib">Hib (Haemophilus influenzae tipe b)</option>
                                        <option value="Japanese-Encephalitis">Japanese Encephalitis</option>
                                        <option value="PCV">PCV (Pneumokokus)</option>
                                        <option value="Rotavirus">Rotavirus</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="jadwal" class="form-label">Jadwal Imunisasi yang Diinginkan</label>
                                    <input type="datetime-local" class="form-control" id="jadwal" name="jadwal" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step3">Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="submit" class="btn btn-success">Kirim Permohonan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Confirmation Section (hidden by default) -->
        <div id="confirmationSection" class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
            <div class="col-lg-8 text-center">
                <div class="bg-light rounded p-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success fa-5x"></i>
                    </div>
                    <h2 class="mb-4">Permohonan Imunisasi Berhasil Dikirim!</h2>
                    <p class="mb-4">Pemesanan Anda akan diproses oleh bidan. Silahkan nantikan di notifikasi Anda.</p>
                    <p class="mb-4">Nomor Registrasi: <strong>{{ session('registration_number') }}</strong></p>
                    <a href="{{ url('/') }}" class="btn btn-primary py-2 px-4">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM elements
        const showFormBtn = document.getElementById('showFormBtn');
        const formSection = document.getElementById('formSection');
        const confirmationSection = document.getElementById('confirmationSection');

        // Show form when button is clicked
        if (showFormBtn && formSection) {
            showFormBtn.addEventListener('click', function() {
                formSection.style.display = 'block';
                showFormBtn.style.display = 'none';
                formSection.scrollIntoView({ behavior: 'smooth' });
            });
        }

        // Form navigation
        const handleFormNavigation = function() {
            // Next buttons
            document.querySelectorAll('.next-step').forEach(function(button) {
                button.addEventListener('click', function() {
                    const currentStep = this.closest('.form-step');
                    const nextStepId = this.getAttribute('data-next');
                    const nextStep = document.getElementById(nextStepId);

                    if (currentStep && nextStep) {
                        let isValid = true;
                        currentStep.querySelectorAll('[required]').forEach(function(input) {
                            if (!input.value) {
                                input.classList.add('is-invalid');
                                isValid = false;
                            } else {
                                input.classList.remove('is-invalid');
                            }
                        });

                        if (isValid) {
                            currentStep.style.display = 'none';
                            nextStep.style.display = 'block';
                            nextStep.scrollIntoView({ behavior: 'smooth' });
                        }
                    }
                });
            });

            // Previous buttons
            document.querySelectorAll('.prev-step').forEach(function(button) {
                button.addEventListener('click', function() {
                    const currentStep = this.closest('.form-step');
                    const prevStepId = this.getAttribute('data-prev');
                    const prevStep = document.getElementById(prevStepId);

                    if (currentStep && prevStep) {
                        currentStep.style.display = 'none';
                        prevStep.style.display = 'block';
                        prevStep.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
        };

        // Initialize form navigation
        handleFormNavigation();

        // Show confirmation if registration number exists
        @if(session('registration_number'))
            if (formSection && showFormBtn && confirmationSection) {
                formSection.style.display = 'none';
                showFormBtn.style.display = 'none';
                confirmationSection.style.display = 'block';
                confirmationSection.scrollIntoView({ behavior: 'smooth' });
            }
        @endif
    });
</script>
@endsection
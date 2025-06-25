@extends('layouts.main')

@section('post')

<div class="container-xxl py-5">
    <div class="container">
        <!-- Section 1: Edukasi tentang sunat -->
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-8">
                <h1 class="display-6 mb-4">Sunat Modern di Bidan Nani Herawati</h1>
                <p class="mb-4">Sunat modern adalah prosedur khitan yang menggunakan teknologi terkini untuk meminimalkan rasa sakit dan mempercepat proses penyembuhan. Di klinik kami, kami menggunakan metode laser yang lebih aman dan nyaman dibandingkan metode konvensional.</p>
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Minim Rasa Sakit</h6>
                                <span>Dengan teknologi Supering dan Superlamp, hampir tanpa rasa sakit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Proses Cepat</h6>
                                <span>Hanya membutuhkan waktu 15-30 menit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Penyembuhan Lebih Cepat</h6>
                                <span>Luka lebih cepat kering dan sembuh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Hygienis</h6>
                                <span>Perlengkapan steril dan sekali pakai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Sidebar keunggulan -->
            <div class="col-lg-4">
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Keunggulan Sunat di Bidan Nani</h2>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-user-md text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Tenaga Profesional</h5>
                            <p>Ditangani oleh bidan berpengalaman khusus sunat modern</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-procedures text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Fasilitas Memadai</h5>
                            <p>Ruang perawatan yang nyaman dan bersih</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-pills text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Paket Lengkap</h5>
                            <p>Sudah termasuk obat dan perawatan pasca sunat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button untuk menampilkan form -->
        <div class="row justify-content-center mb-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-6 text-center">
                <button id="showFormBtn" class="btn btn-primary py-3 px-5">Yuk Daftarkan Segera di Bidan!</button>
            </div>
        </div>

        <!-- Form Section (hidden by default) -->
        <div id="formSection" class="row g-5 wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
            <div class="col-lg-12">
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Formulir Pendaftaran Sunat Modern</h2>

                    <!-- Multi-step form -->
                    <form id="sunatForm" method="POST" action="{{ route('sunat-modern.submit') }}">
                        @csrf

                        <!-- Progress Steps Indicator -->
                        <div class="mb-4">
                            <ul class="nav nav-pills nav-justified" id="formProgress">
                                <li class="nav-item">
                                    <a class="nav-link active" data-step="step1">Data Diri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" data-step="step2">Data Medis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" data-step="step3">Paket</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" data-step="step4">Jadwal</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Step 1: Informasi Data Diri -->
                        <div id="step1" class="form-step">
                            <h4 class="mb-4">1. Informasi Data Diri</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                    <div class="invalid-feedback">Harap isi nama lengkap</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                    <div class="invalid-feedback">Harap isi tempat lahir</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required max="{{ date('Y-m-d') }}">
                                    <div class="invalid-feedback">Harap pilih tanggal lahir yang valid</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">Harap pilih jenis kelamin</div>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                    <div class="invalid-feedback">Harap isi alamat lengkap</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_telp" class="form-label">Nomor Telepon/HP (Orang Tua/Wali)</label>
                                    <input type="tel" class="form-control" id="no_telp" name="no_telp" pattern="[0-9]{10,13}" required>
                                    <div class="invalid-feedback">Harap isi nomor telepon yang valid (10-13 digit)</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_ortu" class="form-label">Nama Orang Tua/Wali</label>
                                    <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" required>
                                    <div class="invalid-feedback">Harap isi nama orang tua/wali</div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step2">Lanjut</button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Data Medis -->
                        <div id="step2" class="form-step" style="display: none;">
                            <h4 class="mb-4">2. Data Medis</h4>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="riwayat_alergi" class="form-label">Riwayat Alergi (Obat/Makanan)</label>
                                    <textarea class="form-control" id="riwayat_alergi" name="riwayat_alergi" rows="2" required></textarea>
                                    <div class="invalid-feedback">Harap isi riwayat alergi (jika tidak ada, tulis 'Tidak Ada')</div>
                                </div>
                                <div class="col-12">
                                    <label for="kondisi_khusus" class="form-label">Kondisi Kesehatan Khusus (Jika Ada)</label>
                                    <textarea class="form-control" id="kondisi_khusus" name="kondisi_khusus" rows="2"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit Serius (Jika Ada)</label>
                                    <textarea class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" rows="2"></textarea>
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

                        <!-- Step 3: Pilihan Paket -->
                        <div id="step3" class="form-step" style="display: none;">
                            <h4 class="mb-4">3. Pilihan Paket/Jenis Sunat</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_sunat" id="sunat_konvensional" value="Sunat Konvensional" required>
                                                <label class="form-check-label fw-bold" for="sunat_konvensional">
                                                    Sunat Konvensional
                                                </label>
                                            </div>
                                            <p class="text-muted small mt-2">Metode tradisional dengan pisau bedah</p>
                                            <div class="mt-3">
                                                <h5 class="text-primary">Rp 500.000</h5>
                                                <ul class="list-unstyled small">
                                                    <li><i class="fas fa-check text-success me-2"></i> Prosedur standar</li>
                                                    <li><i class="fas fa-check text-success me-2"></i> Obat pereda nyeri</li>
                                                    <li><i class="fas fa-check text-success me-2"></i> Konsultasi dokter</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_sunat" id="sunat_laser" value="Sunat Laser/Modern" required>
                                                <label class="form-check-label fw-bold" for="sunat_laser">
                                                    Sunat Laser/Modern
                                                </label>
                                            </div>
                                            <p class="text-muted small mt-2">Metode modern dengan teknologi laser</p>
                                            <div class="mt-3">
                                                <h5 class="text-primary">Rp 1.200.000</h5>
                                                <ul class="list-unstyled small">
                                                    <li><i class="fas fa-check text-success me-2"></i> Teknologi laser</li>
                                                    <li><i class="fas fa-check text-success me-2"></i> Minim rasa sakit</li>
                                                    <li><i class="fas fa-check text-success me-2"></i> Penyembuhan cepat</li>
                                                    <li><i class="fas fa-check text-success me-2"></i> Paket obat lengkap</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="paket_lengkap" name="paket_lengkap" value="1">
                                        <label class="form-check-label" for="paket_lengkap">
                                            Tambahkan Paket Perawatan Pasca Sunat (+Rp 200.000)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i> Paket perawatan termasuk obat harian, vitamin, dan konsultasi selama masa penyembuhan.
                                    </div>
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

                        <!-- Step 4: Jadwal -->
                        <div id="step4" class="form-step" style="display: none;">
                            <h4 class="mb-4">4. Jadwal Sunat</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="tanggal_sunat" class="form-label">Tanggal Sunat</label>
                                    <input type="date" class="form-control" id="tanggal_sunat" name="tanggal_sunat" min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                                    <div class="invalid-feedback">Harap pilih tanggal yang valid (minimal besok)</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="waktu_sunat" class="form-label">Waktu Sunat</label>
                                    <select class="form-select" id="waktu_sunat" name="waktu_sunat" required>
                                        <option value="">Pilih Waktu</option>
                                        <option value="08:00-10:00">08:00 - 10:00</option>
                                        <option value="10:00-12:00">10:00 - 12:00</option>
                                        <option value="13:00-15:00">13:00 - 15:00</option>
                                    </select>
                                    <div class="invalid-feedback">Harap pilih waktu sunat</div>
                                </div>
                                <div class="col-12">
                                    <label for="catatan_tambahan" class="form-label">Catatan Tambahan (Jika Ada)</label>
                                    <textarea class="form-control" id="catatan_tambahan" name="catatan_tambahan" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step3">Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-paper-plane me-2"></i> Kirim Pendaftaran
                                    </button>
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
                    <h2 class="mb-4">Pendaftaran Berhasil!</h2>
                    <p class="mb-4">Pemesanan Anda akan diproses oleh bidan. Silahkan nantikan notifikasi di akun Anda.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ url('/') }}" class="btn btn-primary py-2 px-4">Kembali ke Beranda</a>
                        <button id="printReceiptBtn" class="btn btn-outline-primary py-2 px-4">
                            <i class="fas fa-print me-2"></i> Cetak Bukti
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show form when button is clicked
        document.getElementById('showFormBtn').addEventListener('click', function() {
            document.getElementById('formSection').style.display = 'block';
            this.style.display = 'none';
            document.getElementById('formSection').scrollIntoView({
                behavior: 'smooth'
            });
        });

        // Form validation and step navigation
        function validateStep(stepId) {
            let isValid = true;
            const currentStep = document.getElementById(stepId);
            const inputs = currentStep.querySelectorAll('[required]');

            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');

                    // Additional validation for specific fields
                    if (input.id === 'no_telp' && !/^[0-9]{10,13}$/.test(input.value)) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }

                    if (input.id === 'tanggal_lahir' && new Date(input.value) >= new Date()) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }
                }
            });

            // Special validation for radio buttons
            if (stepId === 'step3') {
                const radioSelected = currentStep.querySelector('input[name="jenis_sunat"]:checked');
                if (!radioSelected) {
                    currentStep.querySelector('#sunat_konvensional').classList.add('is-invalid');
                    currentStep.querySelector('#sunat_laser').classList.add('is-invalid');
                    isValid = false;
                }
            }

            return isValid;
        }

        // Update progress indicator
        function updateProgress(currentStepId) {
            const progressItems = document.querySelectorAll('#formProgress .nav-link');
            let currentStepFound = false;

            progressItems.forEach(item => {
                if (item.getAttribute('data-step') === currentStepId) {
                    item.classList.add('active');
                    currentStepFound = true;
                } else {
                    item.classList.remove('active');
                    if (currentStepFound) {
                        item.classList.add('disabled');
                    } else {
                        item.classList.remove('disabled');
                    }
                }
            });
        }

        // Step navigation
        document.querySelectorAll('.next-step').forEach(button => {
            button.addEventListener('click', function() {
                const currentStepId = this.closest('.form-step').id;
                const nextStepId = this.getAttribute('data-next');

                if (validateStep(currentStepId)) {
                    document.getElementById(currentStepId).style.display = 'none';
                    document.getElementById(nextStepId).style.display = 'block';
                    updateProgress(nextStepId);

                    // Scroll to top of next step
                    document.getElementById(nextStepId).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        document.querySelectorAll('.prev-step').forEach(button => {
            button.addEventListener('click', function() {
                const currentStepId = this.closest('.form-step').id;
                const prevStepId = this.getAttribute('data-prev');

                document.getElementById(currentStepId).style.display = 'none';
                document.getElementById(prevStepId).style.display = 'block';
                updateProgress(prevStepId);

                document.getElementById(prevStepId).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Form submission with AJAX
        $('#sunatForm').submit(function(e) {
            e.preventDefault();

            // Validate last step
            if (!validateStep('step4')) {
                return;
            }

            // Show loading state
            const submitBtn = $(this).find('[type="submit"]');
            submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Memproses...');

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        $('#formSection').hide();
                        $('#confirmationSection').show();
                        $('#confirmationSection').scrollIntoView({
                            behavior: 'smooth'
                        });

                        // Store registration data for printing
                        if (response.data) {
                            sessionStorage.setItem('registrationData', JSON.stringify(response.data));
                        }
                    } else {
                        alert(response.message || 'Terjadi kesalahan. Silakan coba lagi.');
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'Terjadi kesalahan. Silakan coba lagi.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    alert(errorMessage);
                },
                complete: function() {
                    submitBtn.prop('disabled', false).html('<i class="fas fa-paper-plane me-2"></i> Kirim Pendaftaran');
                }
            });
        });

        // Print receipt functionality
        document.getElementById('printReceiptBtn')?.addEventListener('click', function() {
            const registrationData = JSON.parse(sessionStorage.getItem('registrationData') || '{}');

            // Create printable content
            const printContent = `
                <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
                    <h2 style="text-align: center; color: #2c3e50;">Bidan Nani Herawati</h2>
                    <h3 style="text-align: center; color: #3498db;">Bukti Pendaftaran Sunat Modern</h3>
                    <hr style="border-top: 2px dashed #ccc; margin: 20px 0;">
                    
                    <div style="margin-bottom: 15px;">
                        <h4 style="color: #2c3e50; margin-bottom: 5px;">Data Pasien</h4>
                        <p><strong>Nama:</strong> ${registrationData.nama_lengkap || '-'}</p>
                        <p><strong>TTL:</strong> ${registrationData.tempat_lahir || '-'}, ${registrationData.tanggal_lahir ? new Date(registrationData.tanggal_lahir).toLocaleDateString('id-ID') : '-'}</p>
                        <p><strong>No. HP:</strong> ${registrationData.no_telp || '-'}</p>
                        <p><strong>Nama Orang Tua/Wali:</strong> ${registrationData.nama_ortu || '-'}</p>
                    </div>
                    
                    <div style="margin-bottom: 15px;">
                        <h4 style="color: #2c3e50; margin-bottom: 5px;">Detail Sunat</h4>
                        <p><strong>Jenis Sunat:</strong> ${registrationData.jenis_sunat || '-'}</p>
                        <p><strong>Paket Perawatan:</strong> ${registrationData.paket_lengkap === '1' ? 'Ya (+Rp 200.000)' : 'Tidak'}</p>
                        <p><strong>Tanggal:</strong> ${registrationData.tanggal_sunat ? new Date(registrationData.tanggal_sunat).toLocaleDateString('id-ID') : '-'}</p>
                        <p><strong>Waktu:</strong> ${registrationData.waktu_sunat || '-'}</p>
                    </div>
                    
                    <hr style="border-top: 2px dashed #ccc; margin: 20px 0;">
                    <p style="text-align: center; font-style: italic;">Harap datang 15 menit sebelum jadwal dengan membawa bukti ini.</p>
                    <p style="text-align: center; margin-top: 30px;">Terima kasih telah mempercayakan layanan sunat kepada kami.</p>
                </div>
            `;

            // Open print window
            const printWindow = window.open('', '_blank');
            printWindow.document.write(`
                <html>
                    <head>
                        <title>Bukti Pendaftaran Sunat</title>
                        <style>
                            @media print {
                                @page { size: auto; margin: 10mm; }
                                body { -webkit-print-color-adjust: exact; }
                            }
                        </style>
                    </head>
                    <body onload="window.print();">${printContent}</body>
                </html>
            `);
            printWindow.document.close();
        });
    });
</script>
@endsection
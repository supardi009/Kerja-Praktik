@extends('layouts.main')

@section('post')

<div class="container-xxl py-5">
    <div class="container">
        <!-- Section 1: Edukasi tentang periksa kehamilan -->
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-8">
                <h1 class="display-6 mb-4">Pemeriksaan Kehamilan di Bidan Nani Herawati</h1>
                <p class="mb-4">Pemeriksaan kehamilan (antenatal care) adalah rangkaian pemeriksaan yang dilakukan selama kehamilan untuk memastikan kesehatan ibu dan janin. Pemeriksaan rutin membantu mendeteksi dini jika ada masalah dan memberikan edukasi tentang perawatan kehamilan.</p>
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Pemantauan Berkala</h6>
                                <span>Pemantauan perkembangan janin dan kesehatan ibu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Deteksi Dini</h6>
                                <span>Mendeteksi risiko kehamilan sejak dini</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Edukasi Ibu Hamil</h6>
                                <span>Memberikan pengetahuan tentang perawatan kehamilan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Persiapan Persalinan</h6>
                                <span>Mempersiapkan fisik dan mental untuk persalinan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Sidebar keunggulan -->
            <div class="col-lg-4">
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Keunggulan Periksa Kehamilan di Bidan Nani</h2>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-user-md text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Bidan Berpengalaman</h5>
                            <p>Ditangani oleh bidan profesional dengan pengalaman menangani kehamilan</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-procedures text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Fasilitas Lengkap</h5>
                            <p>Peralatan pemeriksaan kehamilan yang memadai</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-heart text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Pelayanan Ramah</h5>
                            <p>Pelayanan yang nyaman dan ramah untuk ibu hamil</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0 btn btn-square rounded-circle bg-primary" style="width: 50px; height: 50px;">
                            <i class="fas fa-calendar-check text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Jadwal Fleksibel</h5>
                            <p>Pemeriksaan bisa dilakukan sesuai jadwal yang diinginkan</p>
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
                    <!-- Tambahkan div untuk error messages -->
                    <div id="formErrors" class="mb-4"></div>

                    <h2 class="mb-4">Formulir Pendaftaran Pemeriksaan Kehamilan</h2>

                    <!-- Progress steps indicator -->
                    <div class="mb-4">
                        <div class="progress mb-3" style="height: 10px;">
                            <div id="formProgress" class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-primary fw-bold">Identitas</span>
                            <span>Data Medis</span>
                            <span>Kehamilan</span>
                            <span>Layanan</span>
                        </div>
                    </div>

                    <!-- Multi-step form -->
                    <form id="periksaHamilForm" method="POST" action="{{ route('periksa-kehamilan.submit') }}" novalidate>
                        @csrf

                        <!-- Step 1: Informasi Identitas Pasien -->
                        <div id="step1" class="form-step">
                            <h4 class="mb-4">1. Informasi Identitas Pasien</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                    <div class="invalid-feedback">Harap isi nama lengkap</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" max="{{ date('Y-m-d') }}" required>
                                    <div class="invalid-feedback">Harap isi tanggal lahir yang valid</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat" class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                                    <div class="invalid-feedback">Harap isi alamat lengkap</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="rt_rw" class="form-label">RT/RW <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" required placeholder="Contoh: 001/002">
                                    <div class="invalid-feedback">Harap isi RT/RW</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kelurahan" class="form-label">Kelurahan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                                    <div class="invalid-feedback">Harap isi kelurahan</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kecamatan" class="form-label">Kecamatan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                                    <div class="invalid-feedback">Harap isi kecamatan</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="kota_kabupaten" class="form-label">Kota/Kabupaten <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten" required>
                                    <div class="invalid-feedback">Harap isi kota/kabupaten</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_telp" class="form-label">Nomor Telepon/HP <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="no_telp" name="no_telp" required>
                                    <div class="invalid-feedback">Harap isi nomor telepon yang valid</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_ktp" class="form-label">Nomor KTP/SIM</label>
                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp">
                                </div>
                                <div class="col-md-6">
                                    <label for="no_bpjs" class="form-label">Nomor BPJS</label>
                                    <input type="text" class="form-control" id="no_bpjs" name="no_bpjs">
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_suami" class="form-label">Nama Suami (Jika Ada)</label>
                                    <input type="text" class="form-control" id="nama_suami" name="nama_suami">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step2">Lanjut <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Data Medis Awal -->
                        <div id="step2" class="form-step" style="display: none;">
                            <h4 class="mb-4">2. Data Medis Awal</h4>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="riwayat_kehamilan" class="form-label">Riwayat Kehamilan Sebelumnya <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="riwayat_kehamilan" name="riwayat_kehamilan" rows="2" required placeholder="Jumlah kehamilan, persalinan, keguguran, dll."></textarea>
                                    <div class="invalid-feedback">Harap isi riwayat kehamilan</div>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit Kronis</label>
                                    <textarea class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" rows="2" placeholder="Diabetes, hipertensi, asma, dll."></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_alergi" class="form-label">Riwayat Alergi <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="riwayat_alergi" name="riwayat_alergi" rows="2" required placeholder="Obat/makanan yang menyebabkan alergi (jika tidak ada, tulis 'Tidak ada')"></textarea>
                                    <div class="invalid-feedback">Harap isi riwayat alergi</div>
                                </div>
                                <div class="col-12">
                                    <label for="keluhan" class="form-label">Keluhan Saat Ini (Jika Ada)</label>
                                    <textarea class="form-control" id="keluhan" name="keluhan" rows="2" placeholder="Mual, pusing, perdarahan, dll."></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step1"><i class="fas fa-arrow-left me-2"></i> Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step3">Lanjut <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Informasi Kehamilan -->
                        <div id="step3" class="form-step" style="display: none;">
                            <h4 class="mb-4">3. Informasi Kehamilan</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="hpht" class="form-label">Hari Pertama Haid Terakhir (HPHT) <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="hpht" name="hpht" max="{{ date('Y-m-d') }}" required>
                                    <div class="invalid-feedback">Harap isi HPHT yang valid</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="usia_kehamilan" class="form-label">Usia Kehamilan (Minggu)</label>
                                    <input type="number" class="form-control" id="usia_kehamilan" name="usia_kehamilan" min="1" max="42" placeholder="Jika sudah diketahui">
                                    <div class="invalid-feedback">Harap isi usia kehamilan antara 1-42 minggu</div>
                                </div>
                                <div class="col-12">
                                    <label for="riwayat_pemeriksaan" class="form-label">Riwayat Pemeriksaan Sebelumnya (Jika Ada)</label>
                                    <textarea class="form-control" id="riwayat_pemeriksaan" name="riwayat_pemeriksaan" rows="2"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Riwayat Imunisasi Tetanus Toxoid (TT/Td) <span class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="imunisasi_tt" id="tt_sudah" value="Sudah" required>
                                        <label class="form-check-label" for="tt_sudah">Sudah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="imunisasi_tt" id="tt_belum" value="Belum" checked required>
                                        <label class="form-check-label" for="tt_belum">Belum</label>
                                    </div>
                                    <div class="invalid-feedback">Harap pilih status imunisasi TT</div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step2"><i class="fas fa-arrow-left me-2"></i> Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-primary next-step" data-next="step4">Lanjut <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4: Data Layanan Kesehatan -->
                        <div id="step4" class="form-step" style="display: none;">
                            <h4 class="mb-4">4. Data Layanan Kesehatan</h4>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Jenis Layanan yang Diminta <span class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="layanan_konsultasi" name="layanan[]" value="Konsultasi" required>
                                        <label class="form-check-label" for="layanan_konsultasi">Konsultasi Kehamilan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="layanan_usg" name="layanan[]" value="USG">
                                        <label class="form-check-label" for="layanan_usg">Pemeriksaan USG</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="layanan_lab" name="layanan[]" value="Pemeriksaan Lab">
                                        <label class="form-check-label" for="layanan_lab">Pemeriksaan Laboratorium</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="layanan_lain" name="layanan[]" value="Lainnya">
                                        <label class="form-check-label" for="layanan_lain">Lainnya</label>
                                    </div>
                                    <div class="invalid-feedback">Harap pilih minimal satu layanan</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_periksa" class="form-label">Tanggal Pemeriksaan <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="tanggal_periksa" name="tanggal_periksa" min="{{ date('Y-m-d') }}" required>
                                    <div class="invalid-feedback">Harap pilih tanggal pemeriksaan yang valid</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="waktu_periksa" class="form-label">Waktu Pemeriksaan <span class="text-danger">*</span></label>
                                    <select class="form-select" id="waktu_periksa" name="waktu_periksa" required>
                                        <option value="">Pilih Waktu</option>
                                        <option value="08:00-10:00">08:00 - 10:00</option>
                                        <option value="10:00-12:00">10:00 - 12:00</option>
                                        <option value="13:00-15:00">13:00 - 15:00</option>
                                        <option value="15:00-17:00">15:00 - 17:00</option>
                                    </select>
                                    <div class="invalid-feedback">Harap pilih waktu pemeriksaan</div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary prev-step" data-prev="step3"><i class="fas fa-arrow-left me-2"></i> Kembali</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane me-2"></i> Kirim Pendaftaran</button>
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
                    <a href="{{ url('/') }}" class="btn btn-primary py-2 px-4">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show form section
        const showFormBtn = document.getElementById('showFormBtn');
        const formSection = document.getElementById('formSection');

        if (showFormBtn && formSection) {
            showFormBtn.addEventListener('click', function() {
                formSection.style.display = 'block';
                showFormBtn.style.display = 'none';
                formSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }

        // Form step navigation
        const formSteps = document.querySelectorAll('.form-step');
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');
        const formProgress = document.getElementById('formProgress');

        // Initialize step navigation
        if (formSteps.length > 0) {
            // Next step button click handler
            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const currentStepId = this.closest('.form-step').id;
                    const nextStepId = this.getAttribute('data-next');

                    if (validateStep(currentStepId)) {
                        document.getElementById(currentStepId).style.display = 'none';
                        document.getElementById(nextStepId).style.display = 'block';

                        // Update progress bar
                        updateProgressBar(nextStepId);

                        // Scroll to top of next step
                        document.getElementById(nextStepId).scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Previous step button click handler
            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const currentStepId = this.closest('.form-step').id;
                    const prevStepId = this.getAttribute('data-prev');

                    document.getElementById(currentStepId).style.display = 'none';
                    document.getElementById(prevStepId).style.display = 'block';

                    // Update progress bar
                    updateProgressBar(prevStepId);

                    // Scroll to top of previous step
                    document.getElementById(prevStepId).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
        }

        // Validate step before proceeding
        function validateStep(stepId) {
            const step = document.getElementById(stepId);
            const inputs = step.querySelectorAll('input[required], textarea[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');

                    // Additional validation for specific fields
                    if (input.id === 'no_telp' && !/^[0-9]{10,13}$/.test(input.value)) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }

                    if (input.id === 'rt_rw' && !/^[0-9]{3}\/[0-9]{3}$/.test(input.value)) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }

                    if (input.id === 'usia_kehamilan' && input.value && (input.value < 1 || input.value > 42)) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }
                }
            });

            // Special validation for checkboxes in step4
            if (stepId === 'step4') {
                const checkboxes = step.querySelectorAll('input[type="checkbox"][name="layanan[]"]');
                const checked = Array.from(checkboxes).some(cb => cb.checked);

                if (!checked) {
                    step.querySelector('.invalid-feedback').style.display = 'block';
                    isValid = false;
                } else {
                    step.querySelector('.invalid-feedback').style.display = 'none';
                }
            }

            // Special validation for radio buttons in step3
            if (stepId === 'step3') {
                const radios = step.querySelectorAll('input[type="radio"][name="imunisasi_tt"]');
                const checked = Array.from(radios).some(radio => radio.checked);

                if (!checked) {
                    step.querySelector('.invalid-feedback').style.display = 'block';
                    isValid = false;
                } else {
                    step.querySelector('.invalid-feedback').style.display = 'none';
                }
            }

            return isValid;
        }

        // Update progress bar based on current step
        function updateProgressBar(stepId) {
            let progress = 25;

            switch (stepId) {
                case 'step2':
                    progress = 50;
                    break;
                case 'step3':
                    progress = 75;
                    break;
                case 'step4':
                    progress = 100;
                    break;
            }

            formProgress.style.width = `${progress}%`;
            formProgress.setAttribute('aria-valuenow', progress);
        }

        // Real-time validation for some fields
        document.getElementById('no_telp')?.addEventListener('input', function() {
            if (!/^[0-9]{10,13}$/.test(this.value)) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });

        document.getElementById('rt_rw')?.addEventListener('input', function() {
            if (!/^[0-9]{3}\/[0-9]{3}$/.test(this.value)) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });

        document.getElementById('periksaHamilForm')?.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate all steps before submission
            let allValid = true;
            formSteps.forEach(step => {
                if (!validateStep(step.id)) {
                    allValid = false;
                }
            });

            if (!allValid) {
                // Show first invalid step
                for (let i = 0; i < formSteps.length; i++) {
                    if (!validateStep(formSteps[i].id)) {
                        formSteps[i].style.display = 'block';
                        formSteps[i].scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Hide other steps
                        for (let j = 0; j < formSteps.length; j++) {
                            if (j !== i) {
                                formSteps[j].style.display = 'none';
                            }
                        }

                        updateProgressBar(formSteps[i].id);
                        break;
                    }
                }

                return;
            }

            // Prepare form data
            const formData = new FormData(this);

            // Handle layanan[] as array
            const layanan = Array.from(document.querySelectorAll('input[name="layanan[]"]:checked'))
                .map(el => el.value);
            formData.delete('layanan[]'); // Remove existing entries
            layanan.forEach(item => {
                formData.append('layanan[]', item);
            });

            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Memproses...';

            // Submit form via fetch
            fetch(this.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: new FormData(this)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Hide form and show confirmation
                        formSection.style.display = 'none';
                        document.getElementById('confirmationSection').style.display = 'block';

                        // Redirect after 3 seconds
                        setTimeout(() => {
                            window.location.href = data.redirect;
                        }, 3000);
                    } else {
                        throw new Error(data.message || 'Terjadi kesalahan saat memproses data');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message);

                    // Show error message to user
                    const errorAlert = document.createElement('div');
                    errorAlert.className = 'alert alert-danger alert-dismissible fade show mt-3';
                    errorAlert.innerHTML = `
                <strong>Error!</strong> ${error.message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

                    // Insert after form
                    this.parentNode.insertBefore(errorAlert, this.nextSibling);

                    // Scroll to error
                    errorAlert.scrollIntoView({
                        behavior: 'smooth'
                    });
                })
                .finally(() => {
                    // Reset button state
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
        });
    });
</script>
@endsection
@extends('layouts.main')

@section('post')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 wow fadeInUp">
            <div class="col-lg-12">
                <div class="bg-light rounded p-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0">Riwayat Layanan Kesehatan</h2>
                        <div class="badge bg-primary rounded-pill px-3 py-2">
                            Total: {{ $submissions->total() }} Data
                        </div>
                    </div>

                    @if($submissions->isEmpty())
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i> Anda belum memiliki riwayat layanan kesehatan.
                    </div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th class="text-center" style="width: 10%">No.</th>
                                    <th style="width: 20%">Jenis Layanan</th>
                                    <th style="width: 35%">Detail</th>
                                    <th class="text-center" style="width: 15%">Tanggal</th>
                                    <th class="text-center" style="width: 20%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submissions as $index => $submission)
                                <tr>
                                    <td class="text-center">
                                        {{ ($submissions->currentPage() - 1) * $submissions->perPage() + $loop->iteration }}
                                    </td>

                                    <td>
                                        @if($submission instanceof \App\Models\SunatModern)
                                        <span class="badge bg-info text-dark">
                                            <i class="fas fa-scissors me-1"></i> SUNAT MODERN
                                        </span>
                                        @elseif($submission instanceof \App\Models\Imunisasi)
                                        <span class="badge bg-success">
                                            <i class="fas fa-syringe me-1"></i> IMUNISASI
                                        </span>
                                        @elseif($submission instanceof \App\Models\PregnancyCheckup)
                                        <span class="badge bg-warning text-dark">
                                            <i class="fas fa-baby me-1"></i> PERIKSA KEHAMILAN
                                        </span>
                                        @elseif($submission instanceof \App\Models\KonsultasiPenyakit)
                                        <span class="badge bg-danger text-light">
                                            <i class="fas fa-notes-medical me-1"></i> KONSULTASI PENYAKIT
                                        </span>

                                        @else
                                        <span class="badge bg-secondary">Tidak Diketahui</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($submission instanceof \App\Models\SunatModern)
                                        <strong>{{ $submission->jenis_sunat ?? '-' }}</strong>
                                        <div class="text-muted small mt-1">
                                            Untuk: {{ $submission->nama_lengkap ?? '-' }}
                                        </div>
                                        @elseif($submission instanceof \App\Models\Imunisasi)
                                        <strong>{{ $submission->jenis_imunisasi ?? '-' }}</strong>
                                        <div class="text-muted small mt-1">
                                            Untuk: {{ $submission->nama_anak ?? '-' }}
                                        </div>
                                        @elseif($submission instanceof \App\Models\PregnancyCheckup)
                                        <strong>Periksa Kehamilan</strong>
                                        <div class="text-muted small mt-1">
                                            Untuk: {{ $submission->nama_lengkap ?? '-' }}
                                            <br>Usia: {{ $submission->usia_kehamilan ?? '-' }} minggu
                                        </div>
                                        @elseif($submission instanceof \App\Models\KonsultasiPenyakit)
                                        <strong>{{ Str::limit($submission->keluhan_utama, 50) ?? '-' }}</strong>
                                        <div class="text-muted small mt-1">
                                            Nama: {{ $submission->nama_lengkap ?? '-' }}<br>
                                            Jadwal: {{ $submission->tanggal_janji }} {{ $submission->jam_janji }}
                                        </div>

                                        @else
                                        <em class="text-muted">Data tidak tersedia</em>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        {{ $submission->created_at ? $submission->created_at->format('d/m/Y') : '-' }}
                                    </td>

                                    <td class="text-center">
                                        @include('partials.status-badge', ['status' => $submission->status ?? 'unknown'])
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $submissions->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
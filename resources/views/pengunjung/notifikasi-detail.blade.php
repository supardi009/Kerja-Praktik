@extends('layouts.main')

@section('post')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 wow fadeInUp">
            <div class="col-lg-12">
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Detail Pengajuan Sunat Modern</h2>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Data Diri</h5>
                            <p><strong>Nama:</strong> {{ $submission->nama_lengkap }}</p>
                            <p><strong>TTL:</strong> {{ $submission->tempat_lahir }}, {{ \Carbon\Carbon::parse($submission->tanggal_lahir)->format('d/m/Y') }}</p>
                            <p><strong>No. HP:</strong> {{ $submission->no_telp }}</p>
                            <p><strong>Orang Tua/Wali:</strong> {{ $submission->nama_ortu }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Detail Layanan</h5>
                            <p><strong>Jenis Sunat:</strong> {{ $submission->jenis_sunat }}</p>
                            <p><strong>Paket:</strong> {{ $submission->paket_lengkap ? 'Lengkap (+ Perawatan)' : 'Standar' }}</p>
                            <p><strong>Jadwal:</strong> {{ \Carbon\Carbon::parse($submission->tanggal_sunat)->format('d/m/Y') }} ({{ $submission->waktu_sunat }})</p>
                            <p><strong>Status:</strong>
                                @if($submission->status == 'disetujui')
                                <span class="badge bg-success">Disetujui</span>
                                @elseif($submission->status == 'ditolak')
                                <span class="badge bg-danger">Ditolak</span>
                                @else
                                <span class="badge bg-warning">Dalam Proses</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h5>Data Medis</h5>
                            <p><strong>Riwayat Alergi:</strong> {{ $submission->riwayat_alergi ?? '-' }}</p>
                            <p><strong>Kondisi Khusus:</strong> {{ $submission->kondisi_khusus ?? '-' }}</p>
                            <p><strong>Riwayat Penyakit:</strong> {{ $submission->riwayat_penyakit ?? '-' }}</p>
                        </div>
                    </div>

                    @if($submission->status == 'ditolak' || $submission->status == 'reschedule')
                    <div class="alert alert-warning mt-4">
                        <h5>Catatan Admin:</h5>
                        <p>{{ $submission->alasan_penolakan ?? 'Silakan hubungi admin untuk informasi lebih lanjut' }}</p>
                    </div>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('pengunjung.notifikasi') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left me-2"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
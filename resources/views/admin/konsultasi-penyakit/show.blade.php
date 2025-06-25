@extends('layouts.admin')

@section('post')
<div class="col-12">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">DETAIL KONSULTASI PENYAKIT</h6>

        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Data Pasien</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $data->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $data->nomor_telepon }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $data->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Data Medis & Jadwal</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Keluhan Utama</th>
                        <td>{{ $data->keluhan_utama }}</td>
                    </tr>
                    <tr>
                        <th>Riwayat Penyakit</th>
                        <td>{{ $data->riwayat_penyakit ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Alergi Obat</th>
                        <td>{{ $data->alergi_obat ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Obat Dikonsumsi</th>
                        <td>{{ $data->obat_dikonsumsi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Jadwal</th>
                        <td>{{ $data->tanggal_janji }} {{ $data->jam_janji }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin.konsultasi-penyakit.update-status', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Status Konsultasi</label>
                        <select name="status" class="form-select" required>
                            <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $data->status == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                            <option value="rejected" {{ $data->status == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                            <option value="completed" {{ $data->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Catatan (opsional)</label>
                        <textarea name="catatan" class="form-control" rows="3">{{ $data->catatan }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
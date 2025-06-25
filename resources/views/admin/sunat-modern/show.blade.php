@extends('layouts.admin')

@section('post')

<div class="col-12">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">DETAIL PENDAFTARAN SUNAT MODERN</h6>

        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Informasi Pasien</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Nama Lengkap</th>
                        <td>{{ $data->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Tempat/Tanggal Lahir</th>
                        <td>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $data->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Nama Orang Tua/Wali</th>
                        <td>{{ $data->nama_ortu }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $data->no_telp }}</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-6">
                <h5>Informasi Sunat</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Jenis Sunat</th>
                        <td>{{ $data->jenis_sunat }}</td>
                    </tr>
                    <tr>
                        <th>Paket Lengkap</th>
                        <td>{{ $data->paket_lengkap ? 'Ya' : 'Tidak' }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Sunat</th>
                        <td>{{ $data->tanggal_sunat }}</td>
                    </tr>
                    <tr>
                        <th>Waktu Sunat</th>
                        <td>{{ $data->waktu_sunat }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge 
                                @if($data->status == 'approved') bg-success
                                @elseif($data->status == 'rejected') bg-danger
                                @else bg-warning
                                @endif">
                                {{ strtoupper($data->status) }}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <h5>Data Medis</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Riwayat Alergi</th>
                        <td>{{ $data->riwayat_alergi }}</td>
                    </tr>
                    <tr>
                        <th>Kondisi Khusus</th>
                        <td>{{ $data->kondisi_khusus ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Riwayat Penyakit</th>
                        <td>{{ $data->riwayat_penyakit ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin.sunat-modern.update-status', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Ubah Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="approved" {{ $data->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                            <option value="rejected" {{ $data->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            <option value="reschedule" {{ $data->status == 'reschedule' ? 'selected' : '' }}>Reschedule</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
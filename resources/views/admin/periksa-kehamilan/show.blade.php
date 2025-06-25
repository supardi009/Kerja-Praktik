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
        <h6 class="mb-4">DETAIL PENDAFTARAN PERIKSA KEHAMILAN</h6>

        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Informasi Pasien</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Nama Lengkap</th>
                        <td>{{ $data->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $data->tanggal_periksa ? date('d/m/Y', strtotime($data->tanggal_periksa)) : 'Belum ditentukan' }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <th>RT/RW</th>
                        <td>{{ $data->rt_rw }}</td>
                    </tr>
                    <tr>
                        <th>Kelurahan/Kecamatan</th>
                        <td>{{ $data->kelurahan }}, {{ $data->kecamatan }}</td>
                    </tr>
                    <tr>
                        <th>Kota/Kabupaten</th>
                        <td>{{ $data->kota_kabupaten }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $data->no_telp }}</td>
                    </tr>
                    <tr>
                        <th>Nama Suami</th>
                        <td>{{ $data->nama_suami ?? '-' }}</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-6">
                <h5>Informasi Kehamilan</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">HPHT</th>
                        <td>{{ date('d/m/Y', strtotime($data->hpht)) }}</td>
                    </tr>
                    <tr>
                        <th>Usia Kehamilan</th>
                        <td>{{ $data->usia_kehamilan }} minggu</td>
                    </tr>
                    <tr>
                        <th>Imunisasi TT</th>
                        <td>{{ $data->imunisasi_tt }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Periksa</th>
                        <td>{{ date('d/m/Y', strtotime($data->tanggal_periksa)) }}</td>
                    </tr>
                    <tr>
                        <th>Waktu Periksa</th>
                        <td>{{ $data->waktu_periksa }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge 
                                @if($data->status == 'confirmed') bg-success
                                @elseif($data->status == 'completed') bg-info
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
                        <th width="40%">Riwayat Kehamilan</th>
                        <td>{{ $data->riwayat_kehamilan }}</td>
                    </tr>
                    <tr>
                        <th>Riwayat Penyakit</th>
                        <td>{{ $data->riwayat_penyakit ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Riwayat Alergi</th>
                        <td>{{ $data->riwayat_alergi }}</td>
                    </tr>
                    <tr>
                        <th>Keluhan</th>
                        <td>{{ $data->keluhan ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin.periksa-kehamilan.update-status', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Ubah Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $data->status == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                            <option value="rejected" {{ $data->status == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                            <option value="completed" {{ $data->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="form-group mb-3" id="alasanField" style="display: none;">
                        <label for="alasan_penolakan" class="form-label">
                            {{ $data->status == 'rejected' ? 'Alasan Penolakan' : 'Catatan' }}
                        </label>
                        <textarea name="alasan_penolakan" id="alasan_penolakan" class="form-control" rows="3">{{ $data->alasan_penolakan ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusSelect = document.getElementById('status');
        const alasanField = document.getElementById('alasanField');

        function toggleAlasanField() {
            if (statusSelect.value === 'rejected' || statusSelect.value === 'completed') {
                alasanField.style.display = 'block';
            } else {
                alasanField.style.display = 'none';
            }
        }

        statusSelect.addEventListener('change', toggleAlasanField);
        toggleAlasanField(); // Pengecekan awal
    });
</script>

@endsection
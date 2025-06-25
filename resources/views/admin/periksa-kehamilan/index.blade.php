@extends('layouts.admin')

@section('post')

{{-- ALERT --}}
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
        <h6 class="mb-4">DAFTAR PENDAFTARAN PERIKSA KEHAMILAN</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA IBU</th>
                        <th scope="col">USIA KEHAMILAN</th>
                        <th scope="col">TANGGAL PERIKSA</th>
                        <th scope="col">LAYANAN</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($checkups as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_lengkap ?? '-' }}</td>
                        <td>{{ $data->usia_kehamilan ? $data->usia_kehamilan . ' minggu' : '-' }}</td>
                        <td>{{ $data->tanggal_periksa ? date('d/m/Y', strtotime($data->tanggal_periksa)) : '-' }}</td>
                        <td>
                            @if(is_array($data->layanan) || is_object($data->layanan))
                            @foreach($data->layanan as $layanan)
                            <span class="badge bg-primary">{{ $layanan }}</span>
                            @endforeach
                            @else
                            <span class="badge bg-secondary">Tidak ada layanan</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge 
                                @if($data->status == 'confirmed') bg-success
                                @elseif($data->status == 'completed') bg-info
                                @else bg-warning
                                @endif">
                                {{ strtoupper($data->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.periksa-kehamilan.show', $data->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-danger">
                            Data tidak ditemukan.
                            Total data di database: {{ \App\Models\PregnancyCheckup::count() }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
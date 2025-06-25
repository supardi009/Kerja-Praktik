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
        <h6 class="mb-4">DAFTAR KONSULTASI PENYAKIT</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Tanggal Janji</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($konsultasis as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ Str::limit($data->keluhan_utama, 50) }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->tanggal_janji)->format('d/m/Y') }} {{ $data->jam_janji }}</td>
                        <td>
                            <span class="badge 
                                @if($data->status == 'confirmed') bg-success
                                @elseif($data->status == 'completed') bg-info
                                @elseif($data->status == 'rejected') bg-danger
                                @else bg-warning
                                @endif">
                                {{ strtoupper($data->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.konsultasi-penyakit.show', $data->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-danger">Belum ada data konsultasi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $konsultasis->links() }}
        </div>
    </div>
</div>
@endsection

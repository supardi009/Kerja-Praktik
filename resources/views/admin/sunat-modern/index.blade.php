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
        <h6 class="mb-4">DAFTAR PENDAFTARAN SUNAT MODERN</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA PASIEN</th>
                        <th scope="col">ORANG TUA/WALI</th>
                        <th scope="col">JENIS SUNAT</th>
                        <th scope="col">TANGGAL SUNAT</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sunatModern as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ $data->nama_ortu }}</td>
                        <td>{{ $data->jenis_sunat }}</td>
                        <td>{{ $data->tanggal_sunat }}</td>
                        <td>
                            <span class="badge 
                                @if($data->status == 'approved') bg-success
                                @elseif($data->status == 'rejected') bg-danger
                                @else bg-warning
                                @endif">
                                {{ strtoupper($data->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.sunat-modern.show', $data->id) }}" class="btn btn-sm btn-primary" title="Detail"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6>DAFTAR PENDAFTARAN IMUNISASI ANAK</h6>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAMA ANAK</th>
                        <th>ORANG TUA</th>
                        <th>JENIS IMUNISASI</th>
                        <th>TANGGAL</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($imunisasi as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_anak }}</td>
                        <td>{{ $data->nama_ibu }}</td>
                        <td>{{ $data->jenis_imunisasi }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->jadwal)->format('d/m/Y H:i') }}</td>
                        <td>
                            <span class="badge 
                                    @if($data->status == 'approved') bg-success
                                    @elseif($data->status == 'rejected') bg-danger
                                    @elseif($data->status == 'reschedule') bg-info
                                    @elseif($data->status == 'completed') bg-primary
                                    @else bg-warning
                                    @endif">
                                {{ strtoupper($data->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.imunisasi.show', $data->id) }}"
                                class="btn btn-sm btn-primary"
                                title="Kelola">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
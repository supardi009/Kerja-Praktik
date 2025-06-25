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
        <h6>DETAIL PENDAFTARAN IMUNISASI</h6>

        <div class="row mb-3">
            <div class="col-md-6">
                <h5>Data Anak</h5>
                <p>Nama: {{ $data->nama_anak }}</p>
                <p>Tanggal Lahir: {{ $data->tanggal_lahir->format('d/m/Y') }}</p>
                <!-- Data lainnya -->
            </div>

            <div class="col-md-6">
                <h5>Status Pendaftaran</h5>
                <p>Status:
                    <span class="badge 
                        @if($data->status == 'approved') bg-success
                        @elseif($data->status == 'rejected') bg-danger
                        @elseif($data->status == 'reschedule') bg-info
                        @else bg-warning
                        @endif">
                        {{ strtoupper($data->status) }}
                    </span>
                </p>

                @if($data->alasan_penolakan)
                <p>Alasan: {{ $data->alasan_penolakan }}</p>
                @endif
            </div>
        </div>

        <form action="{{ route('admin.imunisasi.update-status', $data->id) }}" method="POST">
            @csrf
            <!-- Hapus @method('PUT') -->

            <!-- Isi form tetap sama -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ $data->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ $data->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="reschedule" {{ $data->status == 'reschedule' ? 'selected' : '' }}>Reschedule</option>
                </select>
            </div>

            <div class="mb-3" id="alasan-field" style="display: none;">
                <label class="form-label">Alasan</label>
                <textarea name="alasan_penolakan" class="form-control">{{ $data->alasan_penolakan ?? '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Status</button>
        </form>
    </div>
</div>

<script>
    // Tampilkan field alasan jika status rejected/reschedule
    document.querySelector('select[name="status"]').addEventListener('change', function() {
        const alasanField = document.getElementById('alasan-field');
        alasanField.style.display = (this.value === 'rejected' || this.value === 'reschedule') ?
            'block' :
            'none';
    });

    // Trigger change event saat load
    document.querySelector('select[name="status"]').dispatchEvent(new Event('change'));
</script>
@endsection
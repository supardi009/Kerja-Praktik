@php
$status = strtolower(trim($status));
@endphp

@if(in_array($status, ['approved', 'confirmed', 'disetujui']))
<span class="badge bg-success rounded-pill px-3 py-2">
    <i class="fas fa-check-circle me-1"></i> Dikonfirmasi
</span>
@elseif(in_array($status, ['rejected', 'ditolak']))
<span class="badge bg-danger rounded-pill px-3 py-2">
    <i class="fas fa-times-circle me-1"></i> Ditolak
</span>
@elseif($status === 'completed')
<span class="badge bg-primary rounded-pill px-3 py-2">
    <i class="fas fa-check-double me-1"></i> Selesai
</span>
@elseif($status === 'reschedule')
<span class="badge bg-info rounded-pill px-3 py-2">
    <i class="fas fa-calendar-alt me-1"></i> Dijadwalkan Ulang
</span>
@elseif($status === 'pending')
<span class="badge bg-warning rounded-pill px-3 py-2">
    <i class="fas fa-clock me-1"></i> Menunggu
</span>
@elseif($status == 'confirmed')
<span class="badge bg-success">Dikonfirmasi</span>
@elseif($status == 'completed')
<span class="badge bg-info">Selesai</span>
@elseif($status == 'rejected')
<span class="badge bg-danger">Ditolak</span>
@else
<span class="badge bg-secondary rounded-pill px-3 py-2">
    <i class="fas fa-question-circle me-1"></i> Tidak Diketahui
</span>
@endif
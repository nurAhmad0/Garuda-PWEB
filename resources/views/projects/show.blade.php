@extends('layouts.app')
@section('title', $project->judul)
@section('content')
<div class="card"><h1>{{ $project->judul }} @include('partials.status-badge', ['status' => $project->status])</h1>
<p class="muted">Kategori: {{ $project->kategori }} | Klien: {{ $project->client->nama }} | Budget: {{ rp($project->budget_min) }} - {{ rp($project->budget_max) }} | Batas lelang: {{ $project->batas_lelang }}</p>
<p>{!! nl2br(e($project->deskripsi)) !!}</p></div>
<div class="card"><h2>Penawaran ({{ $bids->count() }})</h2>
@if ($bids->isEmpty())
<p>Belum ada penawaran.</p>
@else
<table><tr><th>Developer</th><th>Harga</th><th>Durasi</th><th>Proposal</th><th></th></tr>
@foreach ($bids as $b)
<tr class="{{ $b->is_winner ? 'winner' : '' }}"><td>{{ $b->developer->nama }}@if ($b->is_winner) <span class="badge win">Pemenang</span>@endif</td>
<td>{{ rp($b->harga) }}</td><td>{{ $b->durasi }} hari</td><td>{!! nl2br(e($b->proposal)) !!}</td><td>
@if ($owner && $project->status === 'terbuka')
<form method="post" action="{{ route('bids.pick', $project->id) }}" onsubmit="return confirm('Pilih penawaran ini sebagai pemenang?')">@csrf
<input type="hidden" name="bid_id" value="{{ $b->id }}"><button class="sm">Pilih pemenang</button></form>
@endif
</td></tr>
@endforeach
</table>
@endif
</div>
@if ($user && $user->role === 'developer')
    @if ($open)
<div class="card"><h2>Ajukan Penawaran</h2><form method="post" action="{{ route('bids.store', $project->id) }}">@csrf
<div class="row"><div><label>Harga (Rp)</label><input type="number" name="harga" min="1" required></div>
<div><label>Durasi (hari)</label><input type="number" name="durasi" min="1" required></div></div>
<label>Proposal</label><textarea name="proposal" required></textarea><p><button>Kirim penawaran</button></p></form></div>
    @else
<div class="card"><p class="muted">Lelang sudah ditutup; penawaran tidak dapat diajukan.</p></div>
    @endif
@elseif (! $user && $open)
<div class="card"><p><a href="{{ route('login') }}">Masuk</a> sebagai developer untuk mengajukan penawaran.</p></div>
@endif
@endsection

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
<td>{{ rp($b->harga) }}</td><td>{{ $b->durasi }} hari</td><td>{!! nl2br(e($b->proposal)) !!}</td><td></td></tr>
@endforeach
</table>
@endif
</div>
@endsection

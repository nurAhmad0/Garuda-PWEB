@extends('layouts.app')
@section('title', 'Dasbor')
@section('content')
<div class="card"><h1>Penawaran Saya</h1></div>
@if ($bids->isEmpty())
<div class="card"><p>Anda belum mengajukan penawaran.</p></div>
@endif
@foreach ($bids as $b)
<div class="card"><h2><a href="{{ route('projects.show', $b->project_id) }}">{{ $b->project->judul }}</a> @include('partials.status-badge', ['status' => $b->project->status])@if ($b->is_winner) <span class="badge open">Pemenang</span>@endif</h2>
<p class="muted">Klien: {{ $b->project->client->nama }} | Harga: {{ rp($b->harga) }} | Durasi: {{ $b->durasi }} hari | Batas: {{ $b->project->batas_lelang }}</p></div>
@endforeach
@endsection

@extends('layouts.app')
@section('title', 'Proyek')
@section('content')
<div class="card"><h1>Daftar Proyek</h1><form class="search" method="get" action="{{ route('home') }}">
<input name="q" maxlength="100" placeholder="Cari judul atau kategori..." value="{{ $s }}"><button>Cari</button></form>
@if ($s !== '')
<p class="muted">Hasil pencarian untuk: <b>{{ $s }}</b> ({{ $projects->count() }} proyek)</p>
@endif
</div>
@if ($projects->isEmpty())
<div class="card"><p>Belum ada proyek yang cocok.</p></div>
@endif
@foreach ($projects as $p)
<div class="card"><h2><a href="{{ route('projects.show', $p->id) }}">{{ $p->judul }}</a> @include('partials.status-badge', ['status' => $p->status])</h2>
<p class="muted">Kategori: {{ $p->kategori }} | Klien: {{ $p->client->nama }} | Budget: {{ rp($p->budget_min) }} - {{ rp($p->budget_max) }} | Batas: {{ $p->batas_lelang }} | {{ $p->bids_count }} penawaran</p>
<p>{{ mb_strimwidth((string) $p->deskripsi, 0, 160, '...') }}</p></div>
@endforeach
@endsection

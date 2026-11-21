@extends('layouts.app')
@section('title', 'Dasbor')
@section('content')
<div class="card"><h1>Proyek Saya</h1><p><a href="{{ route('projects.create') }}">Pasang proyek baru</a></p></div>
@if ($projects->isEmpty())
<div class="card"><p>Anda belum memasang proyek.</p></div>
@endif
@foreach ($projects as $p)
<div class="card"><h2><a href="{{ route('projects.show', $p->id) }}">{{ $p->judul }}</a> @include('partials.status-badge', ['status' => $p->status])</h2>
<p class="muted">Budget: {{ rp($p->budget_min) }} - {{ rp($p->budget_max) }} | Batas: {{ $p->batas_lelang }} | {{ $p->bids_count }} penawaran</p></div>
@endforeach
@endsection

@extends('layouts.app')
@section('title', 'Galat 404')
@section('guest', '1')
@section('content')
@php
    $m = $exception->getMessage();
    $pesan = $m === 'Proyek tidak ditemukan.' ? $m : 'Halaman tidak ditemukan.';
@endphp
<div class="card"><h1>404</h1><p>{{ $pesan }} <a href="{{ route('home') }}">Kembali ke beranda</a>.</p></div>
@endsection

@extends('layouts.app')
@section('title', 'Galat 500')
@section('guest', '1')
@section('content')
<div class="card"><h1>500</h1><p>Terjadi kesalahan pada server. Silakan coba lagi nanti. <a href="{{ route('home') }}">Kembali ke beranda</a>.</p></div>
@endsection

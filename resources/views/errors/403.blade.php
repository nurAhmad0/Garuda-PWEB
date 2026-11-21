@extends('layouts.app')
@section('title', 'Galat 403')
@section('guest', '1')
@section('content')
<div class="card"><h1>403</h1><p>Anda tidak berhak mengakses halaman ini. <a href="{{ route('home') }}">Kembali ke beranda</a>.</p></div>
@endsection

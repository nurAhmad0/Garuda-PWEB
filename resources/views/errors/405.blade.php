@extends('layouts.app')
@section('title', 'Galat 405')
@section('guest', '1')
@section('content')
<div class="card"><h1>405</h1><p>Metode tidak diizinkan. <a href="{{ route('home') }}">Kembali ke beranda</a>.</p></div>
@endsection

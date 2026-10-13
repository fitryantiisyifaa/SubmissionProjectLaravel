@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    
    <div style="margin: 20px 0; padding: 15px; border: 1px solid #ddd; width: 300px;">
        <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>
        <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>
        <p><strong>IPK:</strong> {{ $mhs['ipk'] }}</p>
    </div>

    <a href="{{ route('mahasiswa.daftar') }}">&laquo; Kembali ke Daftar Mahasiswa</a>
@endsection
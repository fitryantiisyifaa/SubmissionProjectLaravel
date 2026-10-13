@extends('layouts.app')
@section('title', 'Daftar Mahasiswa')
@section('content')
    <h1>Daftar Mahasiswa Universitas</h1>
    
    <x-alert tipe="info">
        Data mahasiswa diperbarui secara berkala. Perhatikan mahasiswa dengan IPK di bawah 2.00!
    </x-alert>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 15px;">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
            <th>Evaluasi</th>
            <th>Aksi</th>
        </tr>
        @forelse ($mahasiswa as $mhs)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['ipk'] }}</td>
            <td>
                @if ($mhs['ipk'] >= 3.50) Cumlaude 🌟
                @elseif ($mhs['ipk'] >= 3.00) Baik 👍
                @elseif ($mhs['ipk'] >= 2.00) Cukup
                @else 
                    <span style="color: red; font-weight: bold;">Perlu ditingkatkan ⚠️</span>
                @endif
            </td>
            <td>
                <a href="{{ route('mahasiswa.show', $mhs['nim']) }}">Detail</a>
            </td>
        </tr>
        @empty
        <tr><td colspan="6">Belum ada data mahasiswa.</td></tr>
        @endforelse
    </table>
@endsection
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    // Data statis mahasiswa untuk latihan
    private $dataMahasiswa = [
        ['nim' => '242520100', 'nama' => 'Syifa Fitryanti', 'ipk' => 3.95],
        ['nim' => '242520101', 'nama' => 'Kirana Kanaya', 'ipk' => 3.50],
        ['nim' => '242520102', 'nama' => 'Angela Liana', 'ipk' => 2.90],
        ['nim' => '242520103', 'nama' => 'Anita Mutiara', 'ipk' => 3.92],
        ['nim' => '242520104', 'nama' => 'Lylia Putri', 'ipk' => 1.85], // IPK di bawah 2.0 untuk uji alert
    ];

    // Method untuk menampilkan daftar mahasiswa
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa;
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Method untuk menampilkan detail mahasiswa berdasarkan NIM
    public function show($nim)
    {
        // Cari data mahasiswa berdasarkan NIM
        $mhs = collect($this->dataMahasiswa)->firstWhere('nim', $nim);
        
        // Jika tidak ketemu, tampilkan halaman error 404
        abort_unless($mhs, 404);

        // Diubah menjadi 'mahasiswa.detail' sesuai instruksi soal latihan
        return view('mahasiswa.detail', ['mhs' => $mhs]);
    }

    // Pembuatan Method profil() dan Route /profil
    public function profil()
    {
        $nama = 'Syifa Fitryanti';
        $nim = '242520100';
        $prodi = 'Information Technology';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
}
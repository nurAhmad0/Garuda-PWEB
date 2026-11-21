<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'id' => 1, 'client_id' => 2,
                'judul' => 'Website Toko Batik Online',
                'deskripsi' => 'Membutuhkan toko online dengan katalog produk, keranjang, dan halaman kontak. Desain responsif.',
                'kategori' => 'Web', 'budget_min' => 5000000, 'budget_max' => 10000000,
                'batas_lelang' => '2027-12-31', 'status' => 'terbuka',
            ],
            [
                'id' => 2, 'client_id' => 2,
                'judul' => 'Aplikasi Kasir Android',
                'deskripsi' => 'Aplikasi kasir sederhana untuk warung: catat transaksi, laporan harian, cetak struk via Bluetooth.',
                'kategori' => 'Mobile', 'budget_min' => 8000000, 'budget_max' => 15000000,
                'batas_lelang' => '2027-11-30', 'status' => 'terbuka',
            ],
            [
                'id' => 3, 'client_id' => 3,
                'judul' => 'Redesain Logo dan UI Kit',
                'deskripsi' => 'Redesain identitas visual startup kuliner beserta UI kit untuk aplikasi pemesanan.',
                'kategori' => 'Desain', 'budget_min' => 2000000, 'budget_max' => 4000000,
                'batas_lelang' => '2026-09-01', 'status' => 'ditutup',
            ],
            [
                'id' => 4, 'client_id' => 3,
                'judul' => 'Dashboard Analitik Penjualan',
                'deskripsi' => 'Dashboard grafik penjualan bulanan dari file CSV, dengan filter per cabang dan ekspor laporan.',
                'kategori' => 'Data', 'budget_min' => 6000000, 'budget_max' => 12000000,
                'batas_lelang' => '2027-10-15', 'status' => 'terbuka',
            ],
            [
                'id' => 5, 'client_id' => 4,
                'judul' => 'Chatbot Layanan Pelanggan',
                'deskripsi' => 'Chatbot FAQ untuk situs sekolah, dapat dijawab dalam bahasa Indonesia.',
                'kategori' => 'AI', 'budget_min' => 4000000, 'budget_max' => 8000000,
                'batas_lelang' => '2026-08-20', 'status' => 'terbuka',
            ],
            [
                'id' => 6, 'client_id' => 4,
                'judul' => 'Sistem Absensi Sekolah',
                'deskripsi' => 'Sistem absensi siswa berbasis web dengan rekap per kelas dan laporan bulanan untuk wali kelas.',
                'kategori' => 'Web', 'budget_min' => 7000000, 'budget_max' => 14000000,
                'batas_lelang' => '2026-07-10', 'status' => 'ditutup',
            ],
            [
                'id' => 7, 'client_id' => 2,
                'judul' => 'Migrasi Database ke MySQL',
                'deskripsi' => 'Memindahkan data inventaris dari spreadsheet ke MySQL dan membuat skrip impor.',
                'kategori' => 'Data', 'budget_min' => 3000000, 'budget_max' => 6000000,
                'batas_lelang' => '2026-06-30', 'status' => 'ditutup',
            ],
            [
                'id' => 8, 'client_id' => 3,
                'judul' => 'Landing Page Event Kampus',
                'deskripsi' => 'Satu halaman informasi acara seminar teknologi dengan formulir pendaftaran sederhana.',
                'kategori' => 'Web', 'budget_min' => 1500000, 'budget_max' => 3000000,
                'batas_lelang' => '2027-09-01', 'status' => 'terbuka',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('bids')->insert([
            ['id' => 1,  'project_id' => 1, 'developer_id' => 5, 'harga' => 8500000,  'durasi' => 30, 'proposal' => 'Saya akan membangun dengan PHP dan MySQL, lengkap dengan panel admin produk.', 'is_winner' => 0],
            ['id' => 2,  'project_id' => 1, 'developer_id' => 6, 'harga' => 7000000,  'durasi' => 40, 'proposal' => 'Pengalaman 3 tahun membuat toko online. Termasuk pelatihan penggunaan.', 'is_winner' => 0],
            ['id' => 3,  'project_id' => 1, 'developer_id' => 7, 'harga' => 9500000,  'durasi' => 25, 'proposal' => 'Desain premium bernuansa batik, dukungan perawatan 3 bulan.', 'is_winner' => 0],
            ['id' => 4,  'project_id' => 2, 'developer_id' => 5, 'harga' => 12000000, 'durasi' => 45, 'proposal' => 'Aplikasi native Kotlin, dukungan printer Bluetooth termasuk.', 'is_winner' => 0],
            ['id' => 5,  'project_id' => 2, 'developer_id' => 8, 'harga' => 10000000, 'durasi' => 50, 'proposal' => 'Memakai Flutter agar bisa juga dipakai di iOS nanti.', 'is_winner' => 0],
            ['id' => 6,  'project_id' => 3, 'developer_id' => 6, 'harga' => 3000000,  'durasi' => 14, 'proposal' => 'Tiga konsep logo dan UI kit lengkap di Figma.', 'is_winner' => 1],
            ['id' => 7,  'project_id' => 3, 'developer_id' => 7, 'harga' => 3500000,  'durasi' => 10, 'proposal' => 'Revisi tak terbatas selama 2 minggu.', 'is_winner' => 0],
            ['id' => 8,  'project_id' => 4, 'developer_id' => 8, 'harga' => 9000000,  'durasi' => 35, 'proposal' => 'Dashboard dengan Chart dan ekspor PDF.', 'is_winner' => 0],
            ['id' => 9,  'project_id' => 4, 'developer_id' => 5, 'harga' => 11000000, 'durasi' => 30, 'proposal' => 'Termasuk modul impor CSV otomatis.', 'is_winner' => 0],
            ['id' => 10, 'project_id' => 4, 'developer_id' => 6, 'harga' => 7500000,  'durasi' => 45, 'proposal' => 'Fokus pada grafik interaktif dan filter cabang.', 'is_winner' => 0],
            ['id' => 11, 'project_id' => 5, 'developer_id' => 7, 'harga' => 6000000,  'durasi' => 30, 'proposal' => 'Chatbot berbasis aturan dengan basis pengetahuan FAQ sekolah.', 'is_winner' => 0],
            ['id' => 12, 'project_id' => 6, 'developer_id' => 8, 'harga' => 11000000, 'durasi' => 40, 'proposal' => 'Sistem lengkap dengan rekap otomatis dan ekspor Excel.', 'is_winner' => 1],
            ['id' => 13, 'project_id' => 6, 'developer_id' => 5, 'harga' => 13000000, 'durasi' => 35, 'proposal' => 'Termasuk aplikasi pemindai kode QR untuk absensi.', 'is_winner' => 0],
            ['id' => 14, 'project_id' => 7, 'developer_id' => 6, 'harga' => 4500000,  'durasi' => 15, 'proposal' => 'Skrip impor dengan validasi data dan laporan galat.', 'is_winner' => 1],
            ['id' => 15, 'project_id' => 7, 'developer_id' => 7, 'harga' => 5000000,  'durasi' => 12, 'proposal' => 'Termasuk dokumentasi skema dan pelatihan singkat.', 'is_winner' => 0],
        ]);
    }
}

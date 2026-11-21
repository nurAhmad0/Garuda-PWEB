<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'nama' => 'Admin Garuda',    'email' => 'admin@example.com',  'password' => '$2y$12$Whu4zQHp93BcHk.eOQI3kO3gQ0ByvWBQ4cGOLQlljMHGhnEfgi5ue', 'role' => 'admin'],
            ['id' => 2, 'nama' => 'Budi Santoso',    'email' => 'budi@example.com',   'password' => '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'role' => 'klien'],
            ['id' => 3, 'nama' => 'Siti Rahayu',     'email' => 'siti@example.com',   'password' => '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'role' => 'klien'],
            ['id' => 4, 'nama' => 'Agus Wijaya',     'email' => 'agus@example.com',   'password' => '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'role' => 'klien'],
            ['id' => 5, 'nama' => 'Dewi Lestari',    'email' => 'dewi@example.com',   'password' => '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'role' => 'developer'],
            ['id' => 6, 'nama' => 'Eko Prasetyo',    'email' => 'eko@example.com',    'password' => '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'role' => 'developer'],
            ['id' => 7, 'nama' => 'Fitri Handayani', 'email' => 'fitri@example.com',  'password' => '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'role' => 'developer'],
            ['id' => 8, 'nama' => 'Gilang Ramadhan', 'email' => 'gilang@example.com', 'password' => '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'role' => 'developer'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'email' => 'david.green@example.com',
                'no_hp' => '08445566778',
                'alamat' => 'Jl. Anggrek No. 40',
                'password' => Hash::make('secret'),
            ],
            [
                'nama_lengkap' => 'Eve Black',
                'email' => 'eve.black@example.com',
                'no_hp' => '08556677889',
                'alamat' => 'Jl. Dahlia No. 50',
                'password' => Hash::make('secret'),
            ],
        ];

        \App\Models\Pengguna::insert($data);



    }
}

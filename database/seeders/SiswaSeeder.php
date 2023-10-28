<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'user_id' => '2',
            'nama' => 'Husnul Fikri Averus',
            'kelas' => '12',
            'jurusan_id' => '1',
        ]);

        Siswa::create([
            'user_id' => '3',
            'nama' => 'Muhammad Luthfi',
            'kelas' => '12',
            'jurusan_id' => '1',
        ]);

        Siswa::create([
            'user_id' => '4',
            'nama' => 'Ihsan Nul Amri',
            'kelas' => '12',
            'jurusan_id' => '3',
        ]);
    }
}

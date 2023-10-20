<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusans = [
            'Pengembangan Perangkat Lunak dan GIM',
            'Teknik Jaringan Komputer dan Telekomunikasi',
            'Usaha Layanan Pariwisata',
            'Pemasaran',
            'Akuntansi dan Keuangan Lembaga',
            'Manajemen Perkantoran dan Layanan Bisnis',
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create(['nama' => $jurusan]);
        }
    }
}

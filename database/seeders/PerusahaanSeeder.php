<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Perusahaan;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perusahaan::create([
            'user_id' => '7',
            'nama' => 'PT. ARG Solusi Teknologi',
            'jurusan' => 'PPLG, Pemasaran',
            'alamat' => 'Jalan Puti Bungsu, Padang Utara, Padang, Sumatera Barat',
            'image' => 'image-post/LogoARG.jfif',
        ]);

        Perusahaan::create([
            'user_id' => '8',
            'nama' => 'CV. Mediatama Web Indonesia',
            'jurusan' => 'PPLG, AKL',
            'alamat' => 'Jalan Marapalam, Padang Timur, Padang, Sumatera Barat',
            'image' => 'image-post/LogoMediatama.png',
        ]);
    }
}

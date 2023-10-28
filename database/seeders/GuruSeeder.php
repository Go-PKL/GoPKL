<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'user_id' => '5',
            'nama' => 'Hidayati,M.Pd.T.,S.Kom.',
            'jabatan_id' => '2',
        ]);

        Guru::create([
            'user_id' => '6',
            'nama' => 'Drs. Rusmadi,M.Pd.',
            'jabatan_id' => '2',
        ]);
    }
}

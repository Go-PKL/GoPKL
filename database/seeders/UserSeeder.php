<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();

        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
        ]);
        $adminUser->assignRole($roles->where('name', 'admin')->first());

        User::create([
            'name' => 'siswa1',
            'email' => 'siswa1@siswa.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'siswa2',
            'email' => 'siswa2@siswa.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'siswa3',
            'email' => 'siswa3@siswa.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'guru1',
            'email' => 'guru1@guru.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'guru2',
            'email' => 'guru2@guru.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'perusahaan1',
            'email' => 'perusahaan1@perusahaan.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'perusahaan2',
            'email' => 'perusahaan2@perusahaan.com',
            'password' => bcrypt('123'),
        ]);
    }
}

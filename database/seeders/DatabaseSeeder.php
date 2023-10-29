<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoleSeeder::class);

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
            'name' => 'perushaan1',
            'email' => 'perusahaan1@perusahaan.com',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'name' => 'perushaan2',
            'email' => 'perusahaan2@perusahaan.com',
            'password' => bcrypt('123'),
        ]);

        $this->call(JurusanSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(PerusahaanSeeder::class);
    }
}

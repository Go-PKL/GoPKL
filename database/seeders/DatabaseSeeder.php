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
        $this->call(UserSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(PerusahaanSeeder::class);

        $this->call(JurusanSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(PerusahaanSeeder::class);
    }
}

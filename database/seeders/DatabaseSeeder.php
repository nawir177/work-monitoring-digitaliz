<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\ClientSeeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\EmployeSeeder;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RoleSeeder::class);
        User::factory(10)->create();
        for ($i = 1; $i <= 10; $i++) {
            $user = User::find($i);
            $user->assignRole('karyawan');
        }


        $this->call([
            ClientSeeder::class,
            EmployeSeeder::class,
            IconSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}

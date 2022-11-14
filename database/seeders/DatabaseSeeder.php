<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RolSeeder;
use Database\Seeders\RolPermissionSeeder;

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
        
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $PermissionSeeder = new PermissionSeeder;
        $RolSeeder = new RolSeeder;
        $RolPermissionSeeder = new RolPermissionSeeder;

        /** Corriendo los seed */
        $PermissionSeeder->run();
        $RolSeeder->run();
        $RolPermissionSeeder->run();


    }
}

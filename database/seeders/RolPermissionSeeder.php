<?php

namespace Database\Seeders;

use App\Models\RolPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolPermission = new RolPermission();
        $rolPermission->rol_id = 1;
        $rolPermission->permission_id = 1;
        $rolPermission->save();

        $rolPermission = new RolPermission();
        $rolPermission->rol_id = 2;
        $rolPermission->permission_id = 2;
        $rolPermission->save();


        $rolPermission = new RolPermission();
        $rolPermission->rol_id = 3;
        $rolPermission->permission_id = 3;
        $rolPermission->save();
        
    }
}

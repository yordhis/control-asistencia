<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [     
            'Nivel 1', //1
            'Nivel 2', //2
            'Nivel 3' //3
        ];

        foreach ($permissions as $permission) {
            $perm = new Permission();
    
            $perm->name = $permission;
    
            $perm->save();
        }

    }
}

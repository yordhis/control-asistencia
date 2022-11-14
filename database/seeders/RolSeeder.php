<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [     
            'Administrador', //1
            'Ejecutivo', //2
            'Usuario'//3
        ];

        foreach ($rols as $rol) {
            $r = new Rol();
    
            $r->name = $rol;
    
            $r->save();
        }
    }
}

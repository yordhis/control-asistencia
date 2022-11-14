<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'rol_id',
        'permission_id'
    ];

    public function rols(){
        return $this->belongsTo(Rol::class);
    }

    public function permissions(){
        return $this->belongsTo(Permission::class);
    }
}

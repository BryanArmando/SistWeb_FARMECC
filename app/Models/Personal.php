<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable =['apellido',
    'correo','fecha_nacimiento','nombre','telefono','usuario',
    'sucursalid'];
}

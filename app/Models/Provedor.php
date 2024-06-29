<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $table = 'proveedores'; // Nombre correcto de la tabla en la base de datos

    protected $fillable = ['nombre', 'direccion', 'telefono', 'correo'];
}




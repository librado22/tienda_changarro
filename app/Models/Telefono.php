<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table = 'telefonos'; // Nombre correcto de la tabla en la base de datos

    protected $fillable = ['telefono', 'provedor_id'];

    public function provedor()
    {
        return $this->belongsTo(Provedor::class);
    }
}

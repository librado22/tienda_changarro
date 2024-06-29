<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaMayoreo extends Model
{
    protected $fillable = ['id_producto', 'id_provedor', 'precio_unitario', 'cantidad', 'total'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function provedor()
    {
        return $this->belongsTo(Provedor::class, 'id_provedor');
    }
}

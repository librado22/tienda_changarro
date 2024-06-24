<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $producto_id
 * @property $cantidad
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['producto_id', 'cantidad', 'total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id', 'id');
    }
    
}

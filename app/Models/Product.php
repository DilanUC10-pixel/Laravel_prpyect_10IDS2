<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'precio',
        'porcentaje_impuesto',
    ];

    protected $appends = ['precio_final'];

    public function getPrecioFinalAttribute()
    {
        return $this->precio + ($this->precio * ($this->porcentaje_impuesto / 100));
    }
}

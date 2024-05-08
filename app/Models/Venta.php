<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['producto', 'cantidad', 'precio_unitario'];

    // Método para registrar una nueva venta
    public static function registrarVenta($datosVenta)
    {
        return self::create([
            'producto' => $datosVenta['producto'],
            'cantidad' => $datosVenta['cantidad'],
            'precio_unitario' => $datosVenta['precio_unitario']
        ]);
    }
}

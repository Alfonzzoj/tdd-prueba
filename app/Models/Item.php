<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_etiqueta',
        'tipo_cliente',
        'clave',
        'nombre_etiqueta',
        'ancho',
        'alto',
        'image_path',
        'tallas',
        'estado',
    ];

    protected $casts = [
        'tallas' => 'boolean',
    ];

    // Metodos
    public static function Tejidas()
    {
        return self::where('tipo_etiqueta', 'Tejida');
    }

    public static function Estampadas()
    {
        return self::where('tipo_etiqueta', 'Estampada');
    }

    public static function Transfers()
    {
        return self::where('tipo_etiqueta', 'Transfer');
    }

    public static function Impresas()
    {
        return self::where('tipo_etiqueta', 'Impresa');
    }

    public static function Impresos()
    {
        return self::where('tipo_etiqueta', 'Impreso');
    }
}

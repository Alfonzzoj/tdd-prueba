<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryZone extends Model
{
    use HasFactory;
       protected $fillable = [
        'client_id',
        'nombre_direccion',
        'calle',
        'zona_entrega',
        'numero_interno',
        'numero_externo',
        'default',
        'dias_entrega',
        'horario_entrega',
        'codigo_postal',
        'colonia',
        'delegacion',
        'estado',
        'pais',
        'dias_entrega',
        'horario_entrega_inicio',
        'horario_entrega_fin',

    ];


    // Relaciones
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

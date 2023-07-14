<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'numero_externo',
        'numero_interno',
        'codigo_postal',
        'colonia',
        'delegacion',
        'estado',
        'pais',
        'referencia',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

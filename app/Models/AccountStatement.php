<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountStatement extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'pedido_id', 'client_id', 'fecha_creacion', 'fecha_entrega', 'pagado', 'pendiente'
  ];

  // Relación con el cliente
  public function client()
  {
    return $this->belongsTo(Client::class);
  }
}

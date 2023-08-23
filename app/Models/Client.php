<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  use HasFactory;

  protected $fillable = [
    'rfc',
    'razon_social',
    'telefono_corporativo',
    'enterprise_id',
    'created_at',
    'updated_at',
  ];


  // Relaciones
  // Zonas de entrega / Delivery Zones
  public function deliveryZones()
  {
    return $this->hasMany(DeliveryZone::class);
  }
  // Empresa / Enterprise
  public function enterprise()
  {
    return $this->belongsTo(Enterprise::class);
  }
  //  Direccion fiscal / Tax Address
  public function taxAddress()
  {
    return $this->hasOne(TaxAddress::class);
  }
  // Contactos / Contacts
  public function contacts()
  {
    return $this->hasMany(Contact::class);
  }

  // Estados de cuenta / Account Statements
  public function accountStatements()
  {
    return $this->hasMany(AccountStatement::class);
  }
}

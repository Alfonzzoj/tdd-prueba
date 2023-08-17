<?php

namespace App\Http\Livewire\Clients;

use App\Models\DeliveryZone;
use Livewire\Component;

class CreateDeliveryZoneAndContacts extends Component
{


  public $nombre_direccion, $calle, $zona_entrega, $numero_interno, $numero_externo, $default, $horario_entrega, $codigo_postal, $colonia, $delegacion, $estado, $pais, $horario_entrega_inicio, $horario_entrega_fin, $dias_semana_para_entrega;

  protected $listeners = ['modalOpen' => 'open'];

  public $isOpen = false;

  public function open()
  {
    $this->isOpen = true;
  }
  public function render()
  {
    return view('livewire.clients.create-delivery-zone-and-contacts');
  }



  // Zonas d entrega
  public function saveDeliveryZone()
  {
    DeliveryZone::create([
      'client_id' =>  null,
      'nombre_direccion' => $this->nombre_direccion,
      'calle' => $this->calle,
      'zona_entrega' => $this->zona_entrega,
      'numero_interno' => $this->numero_interno,
      'numero_externo' => $this->numero_externo,
      'default'  => false,
      'dias_entrega' => "lunes",
      'horario_entrega' => $this->horario_entrega_inicio . '-' . $this->horario_entrega_fin,
      'codigo_postal' => $this->codigo_postal,
      'colonia' => $this->colonia,
      'delegacion' => $this->delegacion,
      'estado' => $this->estado,
      'pais' => $this->pais,
      'dias_entrega' => $this->dias_semana_para_entrega,
      'horario_entrega_inicio'  => $this->horario_entrega_inicio,
      'horario_entrega_fin' => $this->horario_entrega_fin,
    ]);
  }
}

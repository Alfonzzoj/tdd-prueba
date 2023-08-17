<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class CreateDeliveryZone extends Component
{
  public function openModal()
  {
    $this->emit('modalOpen');
  }
  public function render()
  {
    return view('livewire.clients.create-delivery-zone');
  }
}

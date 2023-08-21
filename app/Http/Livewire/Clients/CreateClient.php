<?php

namespace App\Http\Livewire\Clients;

use App\Models\Enterprise;
use App\Models\License;
use App\Models\PaymentCondition;
use App\Models\PaymentMethod;
use Livewire\Component;

class CreateClient extends Component
{
  public function render()
  {
    $enterprises = Enterprise::all();
    $payment_methods = PaymentMethod::all();
    $payment_conditions = PaymentCondition::all();
    $licences = License::all();
    // codigos postales
    // $codigos_postales_json = file_get_contents(public_path('data/codigos_postales.json'));

    // $codigos_postales = json_decode($codigos_postales_json, true);
    // return $codigos_postales;
    return view('livewire.clients.create-client', compact('enterprises', 'payment_methods', 'payment_conditions', 'licences'));
  }
}

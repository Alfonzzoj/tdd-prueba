<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;

class ShowClients extends Component
{
    public $clients;
    public $search = '';

    public function mount()
    {
        $this->clients = Client::with(['deliveryZones','enterprise'])->get();
    }

    public function render()
    {
        return view('livewire.clients.show-clients');
    }
}

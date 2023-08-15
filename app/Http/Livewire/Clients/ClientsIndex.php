<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ClientsIndex extends Component
{

    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $clients = Client::where('razon_social','LIKE','%'.$this->search.'%')
                    ->orWhere('rfc','LIKE','%'.$this->search.'%')->paginate();
        return view('livewire.clients.clients-index',compact('clients'));
    }
}

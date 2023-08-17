<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ClientsIndex extends Component
{

  use WithPagination;
  public $search;
  public $sort = 'id';
  public $direction = 'asc';

  public function updatingSearch()
  {
    $this->resetPage();
  }
  public function render()
  {
    $clients = Client::where('razon_social', 'LIKE', '%' . $this->search . '%')
      ->orWhere('rfc', 'LIKE', '%' . $this->search . '%')
      ->orderBy($this->sort, $this->direction)
      ->paginate();
    return view('livewire.clients.clients-index', compact('clients'));
  }
  // Ordenar porcolumna
  public function order($sort)
  {
    if ($this->sort == $sort) {
      if ($this->direction == 'asc') {
        $this->direction = 'desc';
      } else {
        $this->direction = 'asc';
      }
    } else {
      $this->sort = $sort;
      $this->direction = 'asc';
    }
  }
}

<?php

namespace App\Http\Livewire\AccountStatements;

use App\Models\AccountStatement;
use Livewire\Component;
use Livewire\WithPagination;

class AccountStatementsIndex extends Component
{
  use WithPagination;
  public $search;
  public $sort = 'id';
  public $direction = 'asc';

  public function mount()
  {
  }

  public function updatingSearch()
  {
    $this->resetPage();
  }
  public function render()
  {
    $accountStatements =  AccountStatement::where('id', 'LIKE', '%' . $this->search . '%')
      ->orWhere('fecha_creacion', 'LIKE', '%' . date('Y-m-d', strtotime($this->search)) . '%')
      ->orWhere('fecha_entrega', 'LIKE', '%' . date('Y-m-d', strtotime($this->search)) . '%')
      ->orderBy($this->sort, $this->direction)
      ->paginate();
    return view('livewire.account-statements.account-statements-index', compact('accountStatements'));
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

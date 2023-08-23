<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountStatementController extends Controller
{
  protected $title = 'Estados de cuenta';
  protected $description = 'Control de  estados de cuenta ';

  public function index()
  {
    $title = $this->title;
    $description = $this->description;


    return view('account_statements.index', compact('title', 'description'));
  }

  public function create()
  {
    $title = $this->title;
    $description = $this->description;

    return view('account_statements.create', compact('title', 'description'));
  }
}

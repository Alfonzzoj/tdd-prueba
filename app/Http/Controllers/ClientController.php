<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Enterprise;
use App\Models\License;
use App\Models\PaymentCondition;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  // Parametros Por default
  protected $title = 'Clientes';
  protected $description = 'Control de Clientes ';




  public function index()
  {
    $title = $this->title;
    $description = $this->description;

    return view('clients.index', compact('title', 'description'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $title = $this->title;
    $description = $this->description;
    // Obtencion de infos
    $enterprises = Enterprise::all();
    $payment_methods = PaymentMethod::all();
    $payment_conditions = PaymentCondition::all();
    $licences = License::all();
    // codigos postales
    $codigos_postales_json = file_get_contents(public_path('data/codigos_postales.json'));

    $codigos_postales = json_decode($codigos_postales_json, true);
    // return $codigos_postales;


    return view('clients.create', compact('title', 'description', 'enterprises', 'payment_methods', 'licences', 'codigos_postales', 'payment_conditions'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Client::create([
      'rfc' => $request->rfc,
      'razon_social' => $request->razon_social,
      'telefono_corporativo' => $request->telefono_corporativo,
      'enterprise_id' => 1,
    ])->save();
    return redirect()->route('clients.index', app()->getLocale())->with('success', 'Cliente creado correctamente');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($language, $id = 1)
  {
    $title = $this->title;
    $description = $this->description;
    $client = Client::with(['deliveryZones', 'enterprise', 'taxAddress', 'contacts'])->find($id);
    // dd($client);
    return view('clients.show', compact('title', 'description', 'client'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($language, $id)
  {
    $title = $this->title;
    $description = $this->description;
    $client = Client::with(['deliveryZones', 'enterprise', 'taxAddress', 'contacts'])->find($id);
    // dd($client->deliveryZones);
    return view('clients.edit', compact('title', 'description', 'client'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $language, $client_id)
  {
    // dd($request->all());
    $title = $this->title;
    $description = $this->description;
    $client = Client::find($client_id);
    $client->update([
      'rfc' => $request->rfc,
      'razon_social' => $request->razon_social,
      'telefono_corporativo' => $request->telefono_corporativo,
      'enterprise_id' => 1,
    ]);
    $client->save();
    return redirect()->route('clients.index', app()->getLocale())->with('success', 'Cliente actualizado correctamente');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($language, Client $client)
  {
    // $client = Client::find($client);
    $client->delete();
    return redirect()->route('clients.index', ['language' => $language]);
  }

  public function items($language, $client_id)
  {
    $title = $this->title;
    $description = $this->description;
    // $client = Client::with(['items'])->find($client_id);
    $client = Client::find($client_id);
    // dd($client->items);
    return view('clients.items', compact('title', 'description', 'client'));
  }

  public function balance($language, $client_id)
  {
    $title = $this->title;
    $description = $this->description;
    $client = Client::find($client_id);
    // dd($client->items);
    // return 1;
    return view('clients.account-statements', compact('title', 'description', 'client'));
  }

  public function orders($language, $client_id)
  {
    $title = $this->title;
    $description = $this->description;
    $client = Client::find($client_id);
    // dd($client->items);
    // return 1;
    return view('clients.orders', compact('title', 'description', 'client'));
  }
}

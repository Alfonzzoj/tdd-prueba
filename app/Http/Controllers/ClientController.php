<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Enterprise;
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
    protected $description = 'Clientes management';


    public function index()
    {
        $title = $this->title;
        $description = $this->description;
        $clients = Client::with(['deliveryZones','enterprise'])->get();
        // dd($clients);
        return view('clients.index',compact('title','description','clients'));
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
        return view('clients.create',compact('title','description'));
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
        return redirect()->route('clients.index',app()->getLocale())->with('success','Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($language,$id)
    {
        $title = $this->title;
        $description = $this->description;
        $client = Client::with(['deliveryZones','enterprise','taxAddress','contacts'])->find($id);
        // dd($client->deliveryZones);
        return view('clients.edit',compact('title','description','client'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $language,$client_id)
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
        return redirect()->route('clients.index',app()->getLocale())->with('success','Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($language, $client)
    {
        $client = Client::find($client);
        $client->delete();
        return redirect()->route('clients.index', ['language' => $language]);
        }
}

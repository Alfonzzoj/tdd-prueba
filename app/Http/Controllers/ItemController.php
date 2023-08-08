<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $title = 'Items';
    protected $description = 'Items management';

    public function index($language = 'es',Request $request)
    {
        $tipo = $request->input('tipo');
        $title = $this->title.' - '.$tipo;
        $description = $this->description;

        if (isset($tipo)) {
            switch ($tipo) {
                case 'Tejidas':
                    $items = Item::Tejidas()->get();
                    break;
                case 'Estampadas':
                    $items = Item::Estampadas()->get();
                    break;
                case 'Transfers':
                    $items = Item::Transfers()->get();
                    break;
                case 'Impresas':
                    $items = Item::Impresas()->get();
                    break;
                case 'Impresos':
                    $items = Item::Impresos()->get();
                    break;
                default:
                    // $items = Item::all();
                    $items = [];
                    break;
            }

        } else {
            // El parámetro no está presente en la URL
            // Realizar otras acciones
        }
        return view('items.index', compact('title', 'description', 'items','tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($language,Request $request)
    {
        $tipo = $request->input('tipo');
        $title = $this->title;
        $description = $this->description;
        return view('items.create', compact('title', 'description','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::create([
            'name' => $request->name,
            'description' => $request->description,
            // Otros campos del modelo Item
        ]);
        return redirect()->route('items.index')->with('success', 'Item creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = $this->title;
        $description = $this->description;
        $item = Item::find($id);
        return view('items.show', compact('title', 'description', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = $this->title;
        $description = $this->description;
        $item = Item::find($id);
        return view('items.edit', compact('title', 'description', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $this->title;
        $description = $this->description;
        $item = Item::find($id);
        $item->update([
            'name' => $request->name,
            'description' => $request->description,
            // Otros campos del modelo Item
        ]);
        return redirect()->route('items.index')->with('success', 'Item actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('items.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function index()
    {
        $enterprises = Enterprise::all();

        return view('enterprises.index', compact('enterprises'));
    }

    public function create()
    {
        return view('enterprises.create');
    }

    public function store(Request $request)
    {
        $enterprise = Enterprise::create($request->all());

        return redirect()->route('enterprises.index')->with('success', 'Empresa creada con éxito.');
    }

    public function show(Enterprise $enterprise)
    {
        return view('enterprises.show', compact('enterprise'));
    }

    public function edit(Enterprise $enterprise)
    {
        return view('enterprises.edit', compact('enterprise'));
    }

    public function update(Request $request, Enterprise $enterprise)
    {
        $enterprise->update($request->all());

        return redirect()->route('enterprises.index')->with('success', 'Empresa actualizada con éxito.');
    }

    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();

        return redirect()->route('enterprises.index')->with('success', 'Empresa eliminada con éxito.');
    }
}

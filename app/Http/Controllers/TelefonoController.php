<?php

namespace App\Http\Controllers;

use App\Models\Telefono;
use App\Models\Provedor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $telefonos = Telefono::with('provedor')->paginate();

        return view('telefono.index', compact('telefonos'))
            ->with('i', ($request->input('page', 1) - 1) * $telefonos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $provedores = Provedor::all();
        $telefono = new Telefono();

        return view('telefono.create', compact('telefono', 'provedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'telefono' => 'required|string|max:255',
            'provedor_id' => 'required|exists:proveedores,id',
        ]);

        Telefono::create($request->all());

        return redirect()->route('telefonos.index')
            ->with('success', 'Telefono created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $telefono = Telefono::find($id);

        return view('telefono.show', compact('telefono'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $telefono = Telefono::find($id);
        $provedores = Provedor::all();

        return view('telefono.edit', compact('telefono', 'provedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Telefono $telefono): RedirectResponse
    {
        $request->validate([
            'telefono' => 'required|string|max:255',
            'provedor_id' => 'required|exists:proveedores,id',
        ]);

        $telefono->update($request->all());

        return redirect()->route('telefonos.index')
            ->with('success', 'Telefono updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Telefono::find($id)->delete();

        return redirect()->route('telefonos.index')
            ->with('success', 'Telefono deleted successfully');
    }
}

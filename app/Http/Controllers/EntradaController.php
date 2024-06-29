<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Producto;
use App\Models\Provedor; // Debería ser 'Proveedor'
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EntradaController extends Controller
{
    public function index(Request $request): View
    {
        $entradas = Entrada::paginate();

        return view('entrada.index', compact('entradas'))
            ->with('i', ($request->input('page', 1) - 1) * $entradas->perPage());
    }

    public function create(): View
    {
        $productos = Producto::all();
        $proveedores = Provedor::all(); // Debería ser 'Proveedor'

        return view('entrada.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'cantidad_entradas' => 'required|integer',
            'id_producto' => 'required|integer',
            'id_proveedor' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        // Calcular el total antes de crear la entrada
        $total = $request->cantidad_entradas * $request->precio_unitario;

        // Crear la entrada con el total calculado
        Entrada::create([
            'cantidad_entradas' => $request->cantidad_entradas,
            'id_producto' => $request->id_producto,
            'id_proveedor' => $request->id_proveedor,
            'precio_unitario' => $request->precio_unitario,
            'total' => $total,
        ]);

        return Redirect::route('entradas.index')
            ->with('success', 'Entrada created successfully.');
    }

    public function show($id): View
    {
        $entrada = Entrada::find($id);

        return view('entrada.show', compact('entrada'));
    }

    public function edit($id): View
    {
        $entrada = Entrada::find($id);

        return view('entrada.edit', compact('entrada'));
    }

    public function update(Request $request, Entrada $entrada): RedirectResponse
    {
        $request->validate([
            'cantidad_entradas' => 'required|integer',
            'id_producto' => 'required|integer',
            'id_proveedor' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        // Calcular el total antes de actualizar la entrada
        $total = $request->cantidad_entradas * $request->precio_unitario;

        $entrada->update([
            'cantidad_entradas' => $request->cantidad_entradas,
            'id_producto' => $request->id_producto,
            'id_proveedor' => $request->id_proveedor,
            'precio_unitario' => $request->precio_unitario,
            'total' => $total,
        ]);

        return Redirect::route('entradas.index')
            ->with('success', 'Entrada updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Entrada::find($id)->delete();

        return Redirect::route('entradas.index')
            ->with('success', 'Entrada deleted successfully');
    }
}

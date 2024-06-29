<?php

namespace App\Http\Controllers;

use App\Models\VentaMayoreo;
use App\Models\Producto;
use App\Models\Provedor;
use Illuminate\Http\Request;

class VentaMayoreoController extends Controller
{
    public function index()
    {
        $ventaMayoreos = VentaMayoreo::with('producto', 'provedor')->paginate();

        return view('venta_mayoreo.index', compact('ventaMayoreos'))
            ->with('i', (request()->input('page', 1) - 1) * $ventaMayoreos->perPage());
    }

    public function create()
    {
        $productos = Producto::all();
        $proveedores = Provedor::all();

        return view('venta_mayoreo.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_producto' => 'required|integer',
            'id_provedor' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);

        $ventaMayoreo = new VentaMayoreo();
        $ventaMayoreo->id_producto = $request->id_producto;
        $ventaMayoreo->id_provedor = $request->id_provedor;
        $ventaMayoreo->precio_unitario = $request->precio_unitario;
        $ventaMayoreo->cantidad = $request->cantidad;
        $ventaMayoreo->total = $request->precio_unitario * $request->cantidad;
        $ventaMayoreo->save();

        return redirect()->route('venta_mayoreo.index')
            ->with('success', 'Venta al mayoreo creada exitosamente.');
    }

    public function show($id)
    {
        $ventaMayoreo = VentaMayoreo::with('producto', 'provedor')->findOrFail($id);

        return view('venta_mayoreo.show', compact('ventaMayoreo'));
    }

    public function edit($id)
    {
        $ventaMayoreo = VentaMayoreo::findOrFail($id);
        $productos = Producto::all();
        $proveedores = Provedor::all();

        return view('venta_mayoreo.edit', compact('ventaMayoreo', 'productos', 'proveedores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_producto' => 'required|integer',
            'id_provedor' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);

        $ventaMayoreo = VentaMayoreo::findOrFail($id);
        $ventaMayoreo->id_producto = $request->id_producto;
        $ventaMayoreo->id_provedor = $request->id_provedor;
        $ventaMayoreo->precio_unitario = $request->precio_unitario;
        $ventaMayoreo->cantidad = $request->cantidad;
        $ventaMayoreo->total = $request->precio_unitario * $request->cantidad;
        $ventaMayoreo->save();

        return redirect()->route('venta_mayoreo.index')
            ->with('success', 'Venta al mayoreo actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $ventaMayoreo = VentaMayoreo::findOrFail($id);
        $ventaMayoreo->delete();

        return redirect()->route('venta_mayoreo.index')
            ->with('success', 'Venta al mayoreo eliminada exitosamente.');
    }
}

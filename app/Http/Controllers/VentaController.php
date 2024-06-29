<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ventas = Venta::join("productos","ventas.producto_id","productos.id")
            ->select("ventas.cantidad","ventas.total","ventas.id","productos.nombre","productos.precio")
            ->get();

        return view('venta.index', compact('ventas'));
           // ->with('i', ($request->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $productos=Producto::all();
        $venta = new Venta();
        return view('venta.create', compact('venta','productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaRequest $request): RedirectResponse
    {
        $request->validated();
        $total=0;
        $producto=Producto::find($request->producto_id);
       
        $total=$request->cantidad * $producto->precio;
        $venta=[
            "producto_id"=>$request->producto_id,
            "cantidad"=>$request->cantidad,
            "total"=>$total
        ];
      
        Venta::create($venta);

        return Redirect::route('ventas.index')
            ->with('success', 'Venta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $venta = Venta::find($id);

        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaRequest $request, Venta $venta): RedirectResponse
    {
        $venta->update($request->validated());

        return Redirect::route('ventas.index')
            ->with('success', 'Venta updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Venta::find($id)->delete();

        return Redirect::route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }
}
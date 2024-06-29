<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index(Request $request): View
    {
        $productos = Producto::paginate();
        return view('producto.index', compact('productos'))
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }

    public function create(): View
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stock' => 'nullable|integer'
        ]);

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('public/imagenes');
            $validatedData['imagen'] = $path;
        }

        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id): View
    {
        $producto = Producto::find($id);
        return view('producto.show', compact('producto'));
    }

    public function edit($id): View
    {
        $producto = Producto::find($id);
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto): RedirectResponse
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stock' => 'nullable|integer'
        ]);

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('public/imagenes');
            $validatedData['imagen'] = $path;
        } else {
            unset($validatedData['imagen']);
        }

        $producto->update($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id): RedirectResponse
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
    
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
    
}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Venta al Mayoreo</h1>
    <form action="{{ route('venta_mayoreo.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id_producto">Producto</label>
            <select name="id_producto" id="id_producto" class="form-control" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_proveedor">Proveedor</label>
            <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="any" name="precio_unitario" id="precio_unitario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection

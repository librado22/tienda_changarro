@extends('layouts.app')

@section('template_title')
    {{ __('Producto') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2>{{ __('Lista de Productos') }}</h2>
                    <a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar Producto</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>{{ $producto->precio }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td>
                                        @if ($producto->imagen)
                                            <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" width="60">
                                        @else
                                            <span>No image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('productos.show', $producto->id) }}">Mostrar</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $productos->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


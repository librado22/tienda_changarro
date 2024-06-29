@extends('layouts.app')

@section('template_title')
    {{ __('Productos') }}
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
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Acciones</th>
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
                                                <img src="{{ asset('storage/' . str_replace('public/', '', $producto->imagen)) }}" alt="{{ $producto->nombre }}" width="60">
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
                    </div>

                    {!! $productos->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    <!-- Estilos específicos para la página de productos -->
    <style>
        body {
            background-image: url('{{ asset('assets/img/background.jpg') }}'); /* Ruta a tu imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente para la tarjeta */
            padding: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        /* Ajustes específicos de diseño si es necesario */
    </style>
@endsection


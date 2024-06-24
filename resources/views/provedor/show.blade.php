@extends('layouts.app')

@section('template_title')
    {{ __('Proveedores') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('Lista de Proveedores') }}</h2>
                        <a href="{{ route('provedores.create') }}" class="btn btn-primary">Agregar Proveedor</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provedores as $provedor)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $provedor->nombre }}</td>
                                        <td>{{ $provedor->direccion }}</td>
                                        <td>{{ $provedor->telefono }}</td>
                                        <td>{{ $provedor->correo }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('provedores.show', $provedor->id) }}">Mostrar</a>
                                            <a class="btn btn-primary" href="{{ route('provedores.edit', $provedor->id) }}">Editar</a>
                                            <form action="{{ route('provedores.destroy', $provedor->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {!! $provedores->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

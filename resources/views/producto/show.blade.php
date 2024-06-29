@extends('layouts.app')

@section('template_title')
    {{ $producto->nombre }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $producto->nombre }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Nombre:</h4>
                            <p>{{ $producto->nombre }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Descripción:</h4>
                            <p>{{ $producto->descripcion }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Precio:</h4>
                            <p>${{ $producto->precio }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Stock:</h4>
                            <p>{{ $producto->stock }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Imagen:</h4>
                            @if ($producto->imagen)
                                <img src="{{ asset('storage/' . str_replace('public/', '', $producto->imagen)) }}" alt="{{ $producto->nombre }}" width="200">
                            @else
                                <p>No image available</p>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')



@section('template_title')
    {{ $entrada->id ?? __('Show') . " " . __('Entrada') }}

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entradas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad de Entradas:</strong>
                            {{ $entrada->cantidad_entradas }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>ID del Producto:</strong>
                            {{ $entrada->id_producto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>ID del Proveedor:</strong>
                            {{ $entrada->id_proveedor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio Unitario:</strong>
                            {{ $entrada->precio_unitario }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

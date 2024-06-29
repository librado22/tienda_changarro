@extends('layouts.app')

@section('template_title')
    {{ __('Show') }} Venta al Mayoreo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Show') }} Venta al Mayoreo</span>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group">
                            <strong>{{ __('Producto:') }}</strong>
                            {{ $ventaMayoreo->producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Proveedor:') }}</strong>
                            {{ $ventaMayoreo->proveedor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Precio Unitario:') }}</strong>
                            {{ $ventaMayoreo->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Cantidad:') }}</strong>
                            {{ $ventaMayoreo->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Total:') }}</strong>
                            {{ $ventaMayoreo->total }}
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('venta_mayoreo.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



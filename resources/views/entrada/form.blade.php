@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Entrada
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Entrada</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('entradas.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row padding-1 p-1">
                                <div class="col-md-6">
                                    <div class="form-group mb-2 mb20">
                                        <label for="cantidad_entradas" class="form-label">{{ __('Cantidad de Entradas') }}</label>
                                        <input type="number" name="cantidad_entradas" class="form-control @error('cantidad_entradas') is-invalid @enderror" value="{{ old('cantidad_entradas') }}" id="cantidad_entradas" placeholder="Cantidad de Entradas">
                                        {!! $errors->first('cantidad_entradas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="id_producto" class="form-label">{{ __('ID del Producto') }}</label>
                                        <input type="number" name="id_producto" class="form-control @error('id_producto') is-invalid @enderror" value="{{ old('id_producto') }}" id="id_producto" placeholder="ID del Producto">
                                        {!! $errors->first('id_producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2 mb20">
                                        <label for="id_proveedor" class="form-label">{{ __('ID del Proveedor') }}</label>
                                        <input type="number" name="id_proveedor" class="form-control @error('id_proveedor') is-invalid @enderror" value="{{ old('id_proveedor') }}" id="id_proveedor" placeholder="ID del Proveedor">
                                        {!! $errors->first('id_proveedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="precio_unitario" class="form-label">{{ __('Precio Unitario') }}</label>
                                        <input type="number" name="precio_unitario" class="form-control @error('precio_unitario') is-invalid @enderror" value="{{ old('precio_unitario') }}" id="precio_unitario" placeholder="Precio Unitario">
                                        {!! $errors->first('precio_unitario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

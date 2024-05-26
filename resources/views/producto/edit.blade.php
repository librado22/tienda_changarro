@extends('layouts.app')

@section('template_title')
    {{ __('Edit') }} Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Edit') }} Producto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('productos.update', $producto->id) }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @include('producto.form')

                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" name="imagen" class="form-control" id="imagen">
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



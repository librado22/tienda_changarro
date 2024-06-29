@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Producto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('productos.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" name="precio" class="form-control" step="0.01" required>
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock:</label>
                                <input type="number" name="stock" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" name="imagen" class="form-control-file" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

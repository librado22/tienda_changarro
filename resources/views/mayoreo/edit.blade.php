@extends('layouts.app')

@section('template_title')
    {{ __('Edit') }} Venta al Mayoreo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Edit') }} Venta al Mayoreo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('venta_mayoreos.update', $ventaMayoreo->id) }}" role="form">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="id_producto">Producto:</label>
                                <select name="id_producto" id="id_producto" class="form-control">
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}" {{ $producto->id == $ventaMayoreo->id_producto ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_provedor">Provedor:</label>
                                <select name="id_provedor" id="id_provedor" class="form-control">
                                    @foreach ($provedores as $provedor)
                                        <option value="{{ $provedor->id }}" {{ $provedor->id == $ventaMayoreo->id_provedor ? 'selected' : '' }}>{{ $provedor->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="precio_unitario">Precio Unitario:</label>
                                <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" value="{{ $ventaMayoreo->precio_unitario }}" required>
                            </div>

                            <div class="form-group">
                                <label for="cantidad">Cantidad:</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $ventaMayoreo->cantidad }}" required>
                            </div>

                            <div class="form-group">
                                <label for="total">Total:</label>
                                <input type="number" name="total" id="total" class="form-control" value="{{ $ventaMayoreo->total }}" readonly>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('cantidad').addEventListener('input', function () {
            const precioUnitario = document.getElementById('precio_unitario').value;
            const cantidad = this.value;
            const total = precioUnitario * cantidad;
            document.getElementById('total').value = total.toFixed(2);
        });

        document.getElementById('precio_unitario').addEventListener('input', function () {
            const precioUnitario = this.value;
            const cantidad = document.getElementById('cantidad').value;
            const total = precioUnitario * cantidad;
            document.getElementById('total').value = total.toFixed(2);
        });
    </script>
@endsection


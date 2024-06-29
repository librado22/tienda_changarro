@extends('layouts.app')

@section('template_title')
    Venta Mayoreo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Venta Mayoreo') }}</span>
                        <div class="float-right">
                            <a href="{{ route('venta_mayoreos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Producto</th>
                                        <th>Proveedor</th>
                                        <th>Precio Unitario</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventaMayoreos as $ventaMayoreo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $ventaMayoreo->producto->nombre }}</td>
                                            <td>{{ $ventaMayoreo->provedor->nombre }}</td>
                                            <td>{{ $ventaMayoreo->precio_unitario }}</td>
                                            <td>{{ $ventaMayoreo->cantidad }}</td>
                                            <td>{{ $ventaMayoreo->total }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('venta_mayoreos.show', $ventaMayoreo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('venta_mayoreos.edit', $ventaMayoreo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                <form action="{{ route('venta_mayoreos.destroy', $ventaMayoreo->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $ventaMayoreos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



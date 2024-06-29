@extends('layouts.app')

@section('template_title')
    Telefonos
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Telefonos') }}</span>
                        <div class="float-right">
                            <a href="{{ route('telefonos.create') }}" class="btn btn-primary btn-sm">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Telefono</th>
                                        <th>Provedor</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($telefonos as $telefono)
                                        <tr>
                                            <td>{{ $telefono->id }}</td>
                                            <td>{{ $telefono->telefono }}</td>
                                            <td>{{ $telefono->provedor->nombre }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('telefonos.show', $telefono->id) }}">{{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('telefonos.edit', $telefono->id) }}">{{ __('Edit') }}</a>
                                                <form action="{{ route('telefonos.destroy', $telefono->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $telefonos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



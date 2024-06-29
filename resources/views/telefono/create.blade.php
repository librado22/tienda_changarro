@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Telefono
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Telefono</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('telefonos.store') }}" role="form">
                            @csrf

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="provedor_id">Provedor</label>
                                <select name="provedor_id" class="form-control" required>
                                    <option value="">Select Provedor</option>
                                    @foreach($provedores as $provedor)
                                        <option value="{{ $provedor->id }}">{{ $provedor->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



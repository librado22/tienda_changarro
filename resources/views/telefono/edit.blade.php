@extends('layouts.app')

@section('template_title')
    {{ __('Edit') }} Telefono
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Edit') }} Telefono</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('telefonos.update', $telefono->id) }}" role="form">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" class="form-control" value="{{ $telefono->telefono }}" required>
                            </div>

                            <div class="form-group">
                                <label for="provedor_id">Provedor</label>
                                <select name="provedor_id" class="form-control" required>
                                    <option value="">Select Provedor</option>
                                    @foreach($provedores as $provedor)
                                        <option value="{{ $provedor->id }}" {{ $provedor->id == $telefono->provedor_id ? 'selected' : '' }}>{{ $provedor->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



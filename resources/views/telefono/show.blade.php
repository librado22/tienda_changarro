@extends('layouts.app')

@section('template_title')
    {{ $telefono->telefono ?? 'Show Telefono' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Show') }} Telefono</span>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $telefono->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Provedor:</strong>
                            {{ $telefono->provedor->nombre ?? 'N/A' }}
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('telefonos.index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


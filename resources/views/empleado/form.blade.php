<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $empleado?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puesto" class="form-label">{{ __('Puesto') }}</label>
            <input type="text" name="puesto" class="form-control @error('puesto') is-invalid @enderror" value="{{ old('puesto', $empleado?->puesto) }}" id="puesto" placeholder="Puesto">
            {!! $errors->first('puesto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="salario" class="form-label">{{ __('Salario') }}</label>
            <input type="text" name="salario" class="form-control @error('salario') is-invalid @enderror" value="{{ old('salario', $empleado?->salario) }}" id="salario" placeholder="Salario">
            {!! $errors->first('salario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
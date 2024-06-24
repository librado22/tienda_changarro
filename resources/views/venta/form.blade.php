<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="producto_id" class="form-label">{{ __('Producto Id') }}</label>
            <select name="producto_id" class="form-control @error('producto_id') is-invalid @enderror" value="{{ old('producto_id', $venta?->producto_id) }}" id="producto_id" >
                <option value="" disabled selected>Selecciona un producto</option>
                @foreach($productos as $producto)
                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                @endforeach
            </select>           
            {!! $errors->first('producto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $venta?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
       {{--
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $venta?->total) }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
     
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
    {{ Form::label('gastos_id') }}

{{ Form::select('gastos_id', $gastosList, $detallegasto->gastos_id, ['class' => 'form-control' . ($errors->has('gastos_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('gastos_id', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $detallegasto->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $detallegasto->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $detallegasto->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('fuente_dest') }}
            {{ Form::text('fuente_dest', $detallegasto->fuente_dest, ['class' => 'form-control' . ($errors->has('fuente_dest') ? ' is-invalid' : ''), 'placeholder' => 'Fuente Dest']) }}
            {!! $errors->first('fuente_dest', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $detallegasto->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
  </div>
</div>

        
        
        
        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('detallegastos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
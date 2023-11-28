<div class="box box-info padding-1">
    <div class="box-body">
    
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
    {{ Form::label('Concepto del Ingreso') }}

{{ Form::select('ingresos_id', $ingresoList, $detalleingreso->ingresos_id, ['class' => 'form-control' . ($errors->has('ingresos_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('ingresos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $detalleingreso->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $detalleingreso->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $detalleingreso->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('fuente_dest') }}
            {{ Form::text('fuente_dest', $detalleingreso->fuente_dest, ['class' => 'form-control' . ($errors->has('fuente_dest') ? ' is-invalid' : ''), 'placeholder' => 'Fuente Dest']) }}
            {!! $errors->first('fuente_dest', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $detalleingreso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
  </div>
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('detalleingresos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
    <div class="container text-center">
  <div class="row align-items-start">
    
    <div class="col">
    <div class="form-group">
    {{ Form::label('Tipo de Ingreso') }}

{{ Form::select('tipingresos_id', $tipingresoList, $ingreso->tipingresos_id, ['class' => 'form-control' . ($errors->has('tipingresos_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('tipingresos_id', '<div class="invalid-feedback">:message</div>') !!}

            
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('Oficina') }}

{{ Form::select('oficina_id', $oficinaList, $ingreso->oficina_id, ['class' => 'form-control' . ($errors->has('oficina_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('oficina_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
    {{ Form::label('N° de Comprobante') }}

{{ Form::select('comp_id', $compList, $ingreso->comp_id, ['class' => 'form-control' . ($errors->has('comp_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('comp_id', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('Fecha de Ingreso') }}
            {{ Form::date('FechIngreso', $ingreso->FechIngreso, ['class' => 'form-control' . ($errors->has('FechIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Fechingreso']) }}
            {!! $errors->first('FechIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $ingreso->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
  </div>
</div> 
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $ingreso->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('origen de Ingreso') }}
            {{ Form::text('origenIngreso', $ingreso->origenIngreso, ['class' => 'form-control' . ($errors->has('origenIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Origeningreso']) }}
            {!! $errors->first('origenIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $ingreso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
  </div>
</div>
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('ingresos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
    </div>
</div>
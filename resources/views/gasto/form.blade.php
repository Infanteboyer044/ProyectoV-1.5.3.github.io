<div class="box box-info padding-1">
    <div class="box-body">
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
    {{ Form::label('Tipo de Gasto') }}

{{ Form::select('tipgasto_id', $tipgstoList, $gasto->tipgasto_id, ['class' => 'form-control' . ($errors->has('tipgasto_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('tipgasto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
        <div class="col">

        <div class="form-group">
    {{ Form::label('Oficina') }}

{{ Form::select('oficinas_id', $oficinaList, $gasto->oficinas_id, ['class' => 'form-control' . ($errors->has('oficinas_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('oficinas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('Nro de Comprobante') }}

{{ Form::select('comp_id', $compList, $gasto->comp_id, ['class' => 'form-control' . ($errors->has('comp_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('comp_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            </div>
    
  </div>
</div><div class="container text-center">
  <div class="row align-items-start">
  <div class="col">
    <div class="form-group">
            {{ Form::label('fechaGasto') }}
            {{ Form::date('fechaGasto', $gasto->fechaGasto, ['class' => 'form-control' . ($errors->has('fechaGasto') ? ' is-invalid' : ''), 'placeholder' => 'Fechagasto']) }}
            {!! $errors->first('fechaGasto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $gasto->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $gasto->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $gasto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    
  </div>
</div>
        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('gastos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
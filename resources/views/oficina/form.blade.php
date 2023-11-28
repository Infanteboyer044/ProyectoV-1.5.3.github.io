<div class="box box-info padding-1">
    <div class="box-body">

    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
    {{ Form::label('Encargado') }}

{{ Form::select('encargados_id', $encargadosList, $oficina->encargados_id, ['class' => 'form-control' . ($errors->has('gastos_id') ? ' is-invalid' : '')]) }}

{!! $errors->first('encargados_id', '<div class="invalid-feedback">:message</div>') !!}

            
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $oficina->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('N° de Celular') }}
            {{ Form::text('fono', $oficina->fono, ['class' => 'form-control' . ($errors->has('fono') ? ' is-invalid' : ''), 'placeholder' => 'Fono']) }}
            {!! $errors->first('fono', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $oficina->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
   
  </div>
</div>
    
        
       
        
        
       
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('oficinas.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
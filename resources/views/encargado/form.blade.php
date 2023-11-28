<div class="box box-info padding-1">
    <div class="box-body">
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $encargado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $encargado->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $encargado->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $encargado->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('sexo') }}

<div class="form-check">
    {{ Form::radio('sexo', 'masculino', $encargado->sexo == 'masculino', ['class' => 'form-check-input' . ($errors->has('sexo') ? ' is-invalid' : '')]) }}
    {{ Form::label('sexo_masculino', 'Masculino', ['class' => 'form-check-label']) }}
</div>

<div class="form-check">
    {{ Form::radio('sexo', 'femenino', $encargado->sexo == 'femenino', ['class' => 'form-check-input' . ($errors->has('sexo') ? ' is-invalid' : '')]) }}
    {{ Form::label('sexo_femenino', 'Femenino', ['class' => 'form-check-label']) }}
</div>

{!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}

        </div>
          </div>
    <div class="col">
    <div class="form-group">
      
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $encargado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}


        </div>    </div>
  </div>
</div>
        
        
        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('encargados.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
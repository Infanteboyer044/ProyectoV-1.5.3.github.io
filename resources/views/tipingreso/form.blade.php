<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tipingreso->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $tipingreso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
</div>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcion', $tipingreso->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripción', '<div class="invalid-feedback">:message</div>') !!}
        </div>  </div>
  </div>
</div>

        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('tipingresos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
    {{ Form::label('Tipo de Comprobante') }}

{{ Form::select('TipComp', ['Factura' => 'Factura', 'Boleta' => 'Boleta'], $comp->TipComp, ['class' => 'form-control' . ($errors->has('TipComp') ? ' is-invalid' : '')]) }}

{!! $errors->first('TipComp', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('N° de Comprobante') }}
            {{ Form::text('NumComp', $comp->NumComp, ['class' => 'form-control' . ($errors->has('NumComp') ? ' is-invalid' : ''), 'placeholder' => 'Numcomp']) }}
            {!! $errors->first('NumComp', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
            {{ Form::label('Fecha de Comprobante') }}
            {{ Form::date('FechComp', $comp->FechComp, ['class' => 'form-control' . ($errors->has('FechComp') ? ' is-invalid' : ''), 'placeholder' => 'Fechcomp']) }}
            {!! $errors->first('FechComp', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $comp->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>    </div>
    <div class="col">
    <div class="form-group">
    {{ Form::label('estado') }}

{{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $comp->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}

{!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}

        </div>    </div>
  </div>
</div>
        
        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <div class="float-right">
                                <a href="{{ route('comps.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cancelar') }}
                                </a>
                              </div>
    </div>
</div>
@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Ingresos</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipingresos Id:</strong>
                            {{ $ingreso->tipingresos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Oficina Id:</strong>
                            {{ $ingreso->oficina_id }}
                        </div>
                        <div class="form-group">
                            <strong>Comp Id:</strong>
                            {{ $ingreso->comp_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechingreso:</strong>
                            {{ $ingreso->FechIngreso }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $ingreso->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingreso->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Origeningreso:</strong>
                            {{ $ingreso->origenIngreso }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ingreso->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

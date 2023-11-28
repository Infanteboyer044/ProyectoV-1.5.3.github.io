@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Detalle de Ingresos</h1>

@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Detalle ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalleingresos.index') }}"> {{ __('Atrass') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ingresos Id:</strong>
                            {{ $detalleingreso->ingresos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $detalleingreso->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $detalleingreso->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $detalleingreso->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Fuente Dest:</strong>
                            {{ $detalleingreso->fuente_dest }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $detalleingreso->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

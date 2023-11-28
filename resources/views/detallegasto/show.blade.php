@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Detalle de Gastos</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Detallegasto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detallegastos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Gastos Id:</strong>
                            {{ $detallegasto->gastos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $detallegasto->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $detallegasto->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $detallegasto->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Fuente Dest:</strong>
                            {{ $detallegasto->fuente_dest }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $detallegasto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

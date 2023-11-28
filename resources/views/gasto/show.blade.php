@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Gastos</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Gasto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('gastos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipgasto Id:</strong>
                            {{ $gasto->tipgasto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Comp Id:</strong>
                            {{ $gasto->comp_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechagasto:</strong>
                            {{ $gasto->fechaGasto }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $gasto->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gasto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $gasto->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $gasto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

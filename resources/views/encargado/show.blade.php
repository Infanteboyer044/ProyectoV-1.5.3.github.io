@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Encargado</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Encargado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('encargados.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $encargado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $encargado->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $encargado->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $encargado->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $encargado->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $encargado->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Oficina</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Oficina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('oficinas.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Encargados Id:</strong>
                            {{ $oficina->encargados_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $oficina->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $oficina->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $oficina->fono }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $oficina->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

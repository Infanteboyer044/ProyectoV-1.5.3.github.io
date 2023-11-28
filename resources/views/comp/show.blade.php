@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Comprobantes</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Comp</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comps.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipcomp:</strong>
                            {{ $comp->TipComp }}
                        </div>
                        <div class="form-group">
                            <strong>Numcomp:</strong>
                            {{ $comp->NumComp }}
                        </div>
                        <div class="form-group">
                            <strong>Fechcomp:</strong>
                            {{ $comp->FechComp }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $comp->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $comp->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

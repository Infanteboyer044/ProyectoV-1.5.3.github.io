@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Tipo de Ingresos</h1>

@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Registrar') }} Tipo de Ingreso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipingresos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipingreso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

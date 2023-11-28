@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Comprobantes</h1>

@stop
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Comprobante</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comps.update', $comp->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comp.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

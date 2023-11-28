@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Tipo de Gastos</h1>

@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Atualizar') }} Tipo de Gasto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipgstos.update', $tipgsto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipgsto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

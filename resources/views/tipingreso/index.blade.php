@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Tipo de Ingresos</h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo de Ingreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('NUEVO') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                      
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipingresos as $tipingreso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipingreso->nombre }}</td>
											<td>{{ $tipingreso->descripcion }}</td>
											<td>{{ $tipingreso->estado }}</td>

                                            <td>
                                                <form action="{{ route('tipingresos.destroy',$tipingreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipingresos.show',$tipingreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipingresos.edit',$tipingreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipingresos->links() !!}
            </div>
        </div>
    </div>
@endsection

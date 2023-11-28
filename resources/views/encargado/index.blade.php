@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Encargado</h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Encargado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('encargados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Apellidos</th>
										<th>Dni</th>
										<th>Direccion</th>
										<th>Sexo</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($encargados as $encargado)
                                        <tr>
                                            
											<td>{{ $encargado->nombre }}</td>
											<td>{{ $encargado->apellidos }}</td>
											<td>{{ $encargado->DNI }}</td>
											<td>{{ $encargado->direccion }}</td>
											<td>{{ $encargado->sexo }}</td>
											<td>{{ $encargado->estado }}</td>

                                            <td>
                                                <form action="{{ route('encargados.destroy',$encargado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('encargados.show',$encargado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('encargados.edit',$encargado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $encargados->links() !!}
            </div>
        </div>
    </div>
@endsection

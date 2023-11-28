@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Detalle de Ingresos</h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle de Ingreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalleingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Ingresos Id</th>
										<th>Fecha</th>
										<th>Concepto</th>
										<th>Monto</th>
										<th>Fuente Dest</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleingresos as $detalleingreso)
                                        <tr>
                                            
											<td>{{ $detalleingreso->ingresos_id }}</td>
											<td>{{ $detalleingreso->fecha }}</td>
											<td>{{ $detalleingreso->concepto }}</td>
											<td>{{ $detalleingreso->monto }}</td>
											<td>{{ $detalleingreso->fuente_dest }}</td>
											<td>{{ $detalleingreso->estado }}</td>

                                            <td>
                                                <form action="{{ route('detalleingresos.destroy',$detalleingreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalleingresos.show',$detalleingreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalleingresos.edit',$detalleingreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $detalleingresos->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Ingresos</h1>

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tipo de Ingreso</th>
										<th>Oficina</th>
										<th>Tipo de comprobante</th>
										<th>Fecha</th>
										<th>Concepto</th>
										<th>Monto</th>
										<th>Origen</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingresos as $ingreso)
                                        <tr>
                                            
											<td>{{ $ingreso->tipoingresos_id }}</td>
											<td>{{ $ingreso->oficina_id }}</td>
											<td>{{ $ingreso->comp_id }}</td>
											<td>{{ $ingreso->FechIngreso }}</td>
											<td>{{ $ingreso->concepto }}</td>
											<td>{{ $ingreso->monto }}</td>
											<td>{{ $ingreso->origenIngreso }}</td>
											<td>{{ $ingreso->estado }}</td>

                                            <td>
                                                <form action="{{ route('ingresos.destroy',$ingreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingresos.show',$ingreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingresos.edit',$ingreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $ingresos->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Detalle de Gastos</h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle de Gasto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detallegastos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Gastos Id</th>
										<th>Fecha</th>
										<th>Concepto</th>
										<th>Monto</th>
										<th>Fuente Dest</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallegastos as $detallegasto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallegasto->gastos_id }}</td>
											<td>{{ $detallegasto->fecha }}</td>
											<td>{{ $detallegasto->concepto }}</td>
											<td>{{ $detallegasto->monto }}</td>
											<td>{{ $detallegasto->fuente_dest }}</td>
											<td>{{ $detallegasto->estado }}</td>

                                            <td>
                                                <form action="{{ route('detallegastos.destroy',$detallegasto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detallegastos.show',$detallegasto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detallegastos.edit',$detallegasto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $detallegastos->links() !!}
            </div>
        </div>
    </div>
@endsection

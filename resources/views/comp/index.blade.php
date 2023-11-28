@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Comprobantes</h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comprobantes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comps.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
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

										<th>Tipo de Comprobante</th>
										<th>Número de Comprobante</th>
										<th>Fecha</th>
										<th>Dirección</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comps as $comp)
                                        <tr>
                                            
											<td>{{ $comp->TipComp }}</td>
											<td>{{ $comp->NumComp }}</td>
											<td>{{ $comp->FechComp }}</td>
											<td>{{ $comp->Direccion }}</td>
											<td>{{ $comp->estado }}</td>

                                            <td>
                                                <form action="{{ route('comps.destroy',$comp->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comps.show',$comp->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comps.edit',$comp->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $comps->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Mantenimiento de Oficina</h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Oficina') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('oficinas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Encargado</th>
										<th>Nombre</th>
										<th>Fono</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($oficinas as $oficina)
                                        <tr>
                                            
											<td>{{ $oficina->encargados_id }}</td>
											<td>{{ $oficina->nombre }}</td>
											<td>{{ $oficina->fono }}</td>
											<td>{{ $oficina->estado }}</td>

                                            <td>
                                                <form action="{{ route('oficinas.destroy',$oficina->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('oficinas.show',$oficina->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('oficinas.edit',$oficina->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $oficinas->links() !!}
            </div>
        </div>
    </div>
@endsection

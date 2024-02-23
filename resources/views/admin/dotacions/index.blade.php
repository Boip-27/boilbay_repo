@extends('adminlte::page')


@section('title', 'Asignación')

@section('content_header')
    <h1>Asignaciones</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.users.index')
            <a href="{{ route('admin.dotacions.create') }}" class="btn btn-primary btn-sm">Nueva Asignación</a>
            
        @endcan
    </div>
    <div class="card">
        <div class="car-body">
            <table id='cargos' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>IDENTIFICACIÓN</th>
                        <th>NOMBRES Y APELLIDOS</th>
                        <th>GRADO</th>
                        <th>DISTRITO</th>
                        <th>TIPO DE ARMA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>FECHA DE REGISTRO DEL ARMA</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dotacions as $dotacion)
                        <tr>
                            <td>{{ $dotacions->id }}</td>
                            <td>{{ $dotacions->identificacion}}</td>
                            <td>{{ $dotacions->user_id}}</td>
                            <td>{{ $dotacions->grado}}</td>
                            <td>{{ $dotacions->distrito}}</td>
                            <td>{{ $dotacions->pertrecho_id}}</td>
                            <td>{{ $dotacions->descripcion}}</td>
                            <td>{{ $dotacions->timestamps}}</td>
                            <td width="150px">
                                @can('admin.users.index')
                                    <form action="{{ route('admin.dotacions.destroy', $dotacion) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.users.index')
                                            <a
                                                href="{{ route('admin.dotacions.edit', $dotacion) }}"class="btn btn-primary btn-sm">Editar</a>
                                        @endcan
                                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#cargos', {
            language: {
                info: 'Mostrando página _PAGE_ de _PAGES_',
                infoEmpty: 'No hay registros disponibles',
                infoFiltered: '(filtrado de _MAX_ registros totales)',
                lengthMenu: 'Mostrar _MENU_ registros por página',
                zeroRecords: 'No se encontró nada - lo siento',
                "search": 'Buscar',
                paginate: {
                    "previous": "Anterior",
                    "next": "Siguiente"
                }

            }
        });
    </script>

@endsection

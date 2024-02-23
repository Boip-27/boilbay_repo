@extends('adminlte::page')


@section('title', 'Asignación')

@section('content_header')
    <h1>Asignaciones</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.users.index')
            <a href="{{ route('admin.asignacions.create') }}" class="btn btn-primary btn-sm">Nueva Asignación</a>
            <a href="{{ route('admin.asignacions.pdf') }}" class="btn btn-secondary btn-sm">Exportar PDF</a>
        @endcan
    </div>
    <div class="card">
        <div class="car-body">
            <table id='cargos' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>VEHÍCULO</th>
                        <th>CIRCUITO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignacions as $asignacion)
                        <tr>
                            <td>{{ $asignacions->id }}</td>
                            <td>{{ $asignacions->user_id }}</td>
                            <td>{{ $asignacions->transporte_id }}</td>
                            <td>{{ $asignacions->dependencia_id }}</td>
                            <td width="150px">
                                @can('admin.users.index')
                                    <form action="{{ route('admin.asignacions.destroy', $asignacion) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.users.index')
                                            <a
                                                href="{{ route('admin.asignacions.edit', $asignacion) }}"class="btn btn-primary btn-sm">Editar</a>
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

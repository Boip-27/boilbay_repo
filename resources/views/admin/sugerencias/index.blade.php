@extends('adminlte::page')

@section('title', 'Reclamos y Sugerencias')

@section('content_header')
    <h1>Reclamos y Sugerencias</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.sugerencias.create')
            <a href="{{ route('admin.sugerencias.create') }}" class="btn btn-primary btn-sm">Reclamo o Sugerencia</a>
        @endcan
        <a href="{{ route('admin.sugerencias.pdf') }}" class="btn btn-secondary btn-sm">Exportar PDF</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='sugerencias' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>APELLIDOS</th>
                        <th>NOMBRES</th>
                        <th>CELULAR</th>
                        <th>FECHA</th>
                        <th>CIRCUITO</th>
                        <th>SUBCIRCUITO</th>
                        <th>DETALLE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sugerencias as $sugerencia)
                        <tr>
                            <td>{{ $sugerencia->id }}</td>
                            <td>{{ $sugerencia->tipo}}</td>
                            <td>{{ $sugerencia->apellidos}}</td>
                            <td>{{ $sugerencia->nombres}}</td>
                            <td>{{ $sugerencia->telefono}}</td>
                            <td>{{ $sugerencia->created_at}}</td>
                            <td>{{ $sugerencia->circuito }}</td>
                            <td>{{ $sugerencia->subcircuito }}</td>
                            <td>{{ $sugerencia->detalle}}</td>
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
        new DataTable('#sugerencias', {
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
@extends('adminlte::page')

@section('title', 'Logística')

@section('content_header')
    <h1>Logística</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.logisticas.create')
            <a href="{{ route('admin.logisticas.create') }}" class="btn btn-primary btn-sm">Agregar repuesto</a>
        @endcan
        <a href="{{ route('admin.logisticas.pdf') }}" class="btn btn-secondary btn-sm">Exportar PDF</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='logisticas' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE REPUESTO</th>
                        <th>FECHA DE INGRESO</th>
                        <th>CATEGORÍA</th>
                        <th>CANTIDAD</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logisticas as $logistica)
                        <tr>
                            <td>{{ $logistica->id }}</td>
                            <td>{{ $logistica->nombre }}</td>
                            <td>{{ $logistica->created_at }}</td>
                            <td>{{ $logistica->categoria }}</td>
                            <td>{{ $logistica->cantidad }}</td>
                            <td width="150px">
                                @can('admin.logisticas.destroy')
                                    <form action="{{ route('admin.logisticas.destroy', $logistica) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.logisticas.edit')
                                            <a href="{{ route('admin.logisticas.edit', $logistica) }}"
                                                class="btn btn-primary btn-sm">Editar</a>
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
        new DataTable('#logisticas', {
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

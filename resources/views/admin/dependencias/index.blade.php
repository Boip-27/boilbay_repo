@extends('adminlte::page')

@section('title', 'Dependencias')

@section('content_header')
    <h1>Dependencias</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.dependencias.create')
            <a href="{{ route('admin.dependencias.create') }}" class="btn btn-primary btn-sm">Agregar dependencia</a>
        @endcan
        <a href="{{ route('admin.dependencias.pdf') }}" class="btn btn-secondary btn-sm">Exportar PDF</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='dependencias' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>PROVINCIA</th>
                        <th>PARROQUIA</th>
                        <th>COD. DISTRITO</th>
                        <th>NOMBRE DISTRITO</th>
                        <th>COD. CIRCUITO</th>
                        <th>NOMBRE CIRCUITO</th>
                        <th>COD. SUBCIRCUITO</th>
                        <th>NOMBRE SUBCIRCUITO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dependencias as $dependencia)
                        <tr>
                            <td>{{ $dependencia->id }}</td>
                            <td>{{ $dependencia->provincia }}</td>
                            <td>{{ $dependencia->parroquia }}</td>
                            <td>{{ $dependencia->cod_distrito }}</td>
                            <td>{{ $dependencia->distrito }}</td>
                            <td>{{ $dependencia->cod_circuito }}</td>
                            <td>{{ $dependencia->circuito }}</td>
                            <td>{{ $dependencia->cod_subcircuito }}</td>
                            <td>{{ $dependencia->subcircuito }}</td>
                            <td width="150px">
                                @can('admin.dependencias.destroy')
                                    <form action="{{ route('admin.dependencias.destroy', $dependencia) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.dependencias.edit')
                                            <a href="{{ route('admin.dependencias.edit', $dependencia) }}"
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
        new DataTable('#dependencias', {
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

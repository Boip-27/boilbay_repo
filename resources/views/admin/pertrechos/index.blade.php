@extends('adminlte::page')

@section('title', 'Pertrechos')

@section('content_header')
    <h1>Pertrechos</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.pertrechos.create')
            <a href="{{ route('admin.pertrechos.create') }}" class="btn btn-primary btn-sm">Agregar pertrecho</a>
        @endcan
        <a href="{{ route('admin.pertrechos.pdf') }}" class="btn btn-secondary btn-sm">Generar Reporte</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='dependencias' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>TIPO DE ARMA</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
                        <th>CÓDIGO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pertrechos as $pertrecho)
                        <tr>
                            <td>{{ $pertrecho->id }}</td>
                            <td>{{ $pertrecho->tipo_arma }}</td>
                            <td>{{ $pertrecho->nombre}}</td>
                            <td>{{ $pertrecho->descripcion}}</td>
                            <td>{{ $pertrecho->codigo}}</td>
                            <td width="150px">
                                @can('admin.pertrechos.destroy')
                                    <form action="{{ route('admin.pertrechos.destroy', $pertrecho) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.pertrechos.edit')
                                            <a href="{{ route('admin.pertrechos.edit', $pertrecho) }}"
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

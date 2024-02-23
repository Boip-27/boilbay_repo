@extends('adminlte::page')

@section('title', 'Transportes')

@section('content_header')
    <h1>Transportes</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.transportes.create')
            <a href="{{ route('admin.transportes.create') }}" class="btn btn-primary btn-sm">Agregar vehículo</a>
        @endcan
        <a href="{{ route('admin.transportes.pdf') }}" class="btn btn-secondary btn-sm">Exportar PDF</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='transportes' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>MARCA</th>
                        <th>MODELO</th>
                        <th>PLACA</th>
                        <th>CHASIS</th>
                        <th>MOTOR</th>
                        <th>KILOMETRAJE</th>
                        <th>CILINDRAJE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transportes as $transporte)
                        <tr>
                            <td>{{ $transporte->id }}</td>
                            <td>{{ $transporte->tipo }}</td>
                            <td>{{ $transporte->marca }}</td>
                            <td>{{ $transporte->modelo }}</td>
                            <td>{{ $transporte->placa }}</td>
                            <td>{{ $transporte->chasis }}</td>
                            <td>{{ $transporte->motor }}</td>
                            <td>{{ $transporte->kilometraje }}</td>
                            <td>{{ $transporte->cilindraje }}</td>
                            <td width="150px">
                                @can('admin.transportes.destroy')
                                    <form action="{{ route('admin.transportes.destroy', $transporte) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.transportes.edit')
                                            <a href="{{ route('admin.transportes.edit', $transporte) }}"
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
        new DataTable('#transportes', {
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

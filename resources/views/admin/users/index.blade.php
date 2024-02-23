@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    @csrf
    <div class="card-header">
        @can('admin.users.create')
            <a class="btn btn-primary btn-sm float-rigth" href="{{ route('admin.users.create') }}">Agregar usuario</a>
        @endcan
        <a class="btn btn-secondary btn-sm float-rigth" href="{{ route('admin.users.pdf') }}">Exportar PDF</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='users' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>IDENTIFICACIÓN</th>
                        <th>GRADO</th>
                        <th>CORREO</th>
                        <th>TIPO DE SANGRE</th>
                        <th>CELULAR</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->identify }}</td>
                            <td>{{ $user->grade }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->blood }}</td>
                            <td>{{ $user->phone }}</td>
                            <td width="150px">
                                @can('admin.users.destroy')
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.users.edit')
                                            <a href="{{ route('admin.users.edit', $user) }}"
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
        new DataTable('#users', {
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

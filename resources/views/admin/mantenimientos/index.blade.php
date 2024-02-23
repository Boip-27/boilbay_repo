<?php
$nombre = $mysqli->query("SELECT id, name FROM users")

?>

@extends('adminlte::page')

@section('title', 'Mantenimientos')

@section('content_header')
    <h1>Mantenimientos</h1>
@stop

@section('content')
    <div class="card-header">
        @can('admin.mantenimientos.create')
            <a href="{{ route('admin.mantenimientos.create') }}" class="btn btn-primary btn-sm">Agregar Mantenimiento</a>
        @endcan
        <a href="{{ route('admin.mantenimientos.pdf') }}" class="btn btn-secondary btn-sm">Generar O.T</a>
    </div>
    <div class="card">
        <div class="car-body">
            <table id='mantenimientos' class="table table-striped shadow-lg mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>NOMBRE</th>
                        <th>VEHÍCULO</th>
                        <th>FECHA</th>
                        <th>KILOMETRAJE</th>
                        <th>OBSERVACIÓN</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mantenimientos as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->tipo }}</td>
                            <td>{{ $row->User->name }}</td>
                            <td>{{ $row->Transporte->placa }}</td>
                            <td>{{ $row->fecha }}</td>
                            <td>{{ $row->Transporte->kilometraje }}</td>
                            <td>{{ $row->observacion}}</td>
                            <td width="150px">
                                @can('admin.mantenimientos.destroy')
                                    <form action="{{ route('admin.mantenimientos.destroy', $mantenimiento) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        @can('admin.mantenimientos.edit')
                                            <a href="{{ route('admin.mantenimientos.edit', $mantenimiento) }}"
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
        new DataTable('#mantenimientos', {
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

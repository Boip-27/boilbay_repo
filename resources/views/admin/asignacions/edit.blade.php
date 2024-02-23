@extends('adminlte::page')

@section('title', 'Cambiar Asignación')

@section('content_header')
    <h1>Cambiar Asignación</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="class alert alert-success">
            <strong>{{ session('mensaje') }} </strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.asignacions.store']) !!}

            <div class="form-group">
                <label for="">Usuario</label><br>
                <select name="user_name" id="inputUser_name" style="width: 25%">
                    @foreach ($users as $user)
                        <option value="{{ $user['id'] }}">{{ $user['name'] }} </option>
                    @endforeach
                </select>

                <div class="form-group">
                    <label for="">Número de Placa</label><br>
                    <select name="transportes_placa" id="inputTransportes_placa" style="width: 25%">
                        @foreach ($transportes as $transporte)
                            <option value="{{ $transporte['id'] }}">{{ $transporte['placa'] }} </option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="">Dependencia</label><br>
                        <select name="dependencia_circuito" id="inputDependencia_circuito" style="width: 25%">
                            @foreach ($dependencias as $dependencia)
                                <option value="{{ $dependencia['id'] }}">{{ $dependencia['circuito'] }} </option>
                            @endforeach
                        </select>
                        <br>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @stop

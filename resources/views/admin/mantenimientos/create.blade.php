@extends('adminlte::page')

@section('title', 'Mantenimiento')

@section('content_header')
    <h1>Mantenimiento</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="class alert alert-success">
            <strong>{{ session('mensaje') }} </strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.mantenimientos.store']) !!}

            
                
                <div class="mb-3" style="width: 50%">
                    <label for="" class="form-label">Tipo de Mantenimiento</label>
                    <select
                        class="form-select form-select-lg"
                        name="mantenimientos"
                        id="tipo"
                    >
                        <option selected></option>
                        <option value="">Preventivo</option>
                        <option value="">Correctivo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <select name="user_id" id="user" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{$user->id}}"></option> 
                        @endforeach
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Vehiculo</label>
                    <select name="transporte_id" id="" class="form-control">
                        @foreach ($transportes as $transporte)
                        <option value="{{$transporte->id}}"></option>
                        @endforeach
                    </select>
                </div>

                        <div class="form-group">
                            {!! Form::label('fecha', 'Fecha') !!}
                            {!! Form::date('fecha', null, ['class'=>'form-control','placeholder'=>'']) !!}
                            @error('fecha')
                            <span class="text-danger">{{$message}}</span>
                          @enderror 
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Kilometraje</label>
                            <select name="transporte_id" id="" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        
                
                        <br>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @stop

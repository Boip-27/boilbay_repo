@extends('adminlte::page')

@section('title', 'Reclamo o Sugerencia')

@section('content_header')
    <h1>Reclamos y Sugerencias</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="class alert alert-success">
            <strong>{{ session('mensaje') }} </strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.sugerencias.store']) !!}

            <div class="form-group" style="width: 35%">
                {!! Form::label('reclamo/sugerencia', 'Reclamo/Sugerencia') !!}
                {!! Form::text('tipo', null, ['class' => 'form-control', 'placeholder' => 'Reclamo o Sugerencia']) !!}
                @error('tipo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group" style="width: 35%">
                {!! Form::label('apellidos', 'Apellidos') !!}
                {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @error('apellidos')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="width: 35%">
                {!! Form::label('nombres', 'Nombres') !!}
                {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @error('nombres')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="width: 35%">
                {!! Form::label('telefono', 'Telefono') !!}
                {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @error('telefono')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group" style="width: 35%" >
                {!! Form::label('circuito', 'Circuito') !!}
                {!! Form::text('circuito', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @error('circuito')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="width: 35%">
                {!! Form::label('subcircuito', 'Subcircuito') !!}
                {!! Form::text('subcircuito', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @error('subcircuito')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="width: 35%">
                {!! Form::label('detalle', 'Detalle') !!}
                {!! Form::textarea('detalle', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @error('detalle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

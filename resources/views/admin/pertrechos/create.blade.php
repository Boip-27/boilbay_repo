@extends('adminlte::page')

@section('title', 'Nuevo Pertrecho')

@section('content_header')
    <h1>Agregar Nuevo</h1>
@stop

@section('content')
@if (session('mensaje'))
    <div class="class alert alert-success">
        <strong>{{session('mensaje')}} </strong>
    </div>  
@endif
    <div class="card">
        <div class="card-body">

        {!! Form::open(['route' => 'admin.pertrechos.store']) !!}
        <div class="form-group" style="width: 35%">
            {!! Form::label('tipo de arma', 'Tipo de Arma') !!}
            {!! Form::text('tipo_arma', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
        @error('tipo_arma')
           <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'']) !!}
       
            @error('nombre')
            <span class="text-danger">{{$message}}</span>
             @enderror
       </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('descripción', 'Descripción') !!}
            {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('ndescripcion')
              <span class="text-danger">{{$message}}</span>
            @enderror        
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('código', 'Código') !!}
            {!! Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('codigo')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

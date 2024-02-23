@extends('adminlte::page')

@section('title', 'Registrar repuesto')

@section('content_header')
    <h1>Crear nuevo registro</h1>
@stop

@section('content')
@if (session('mensaje'))
    <div class="class alert alert-success">
        <strong>{{session('mensaje')}} </strong>
    </div>  
@endif
    <div class="card">
        <div class="card-body">

        {!! Form::open(['route' => 'admin.logisticas.store']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
        @error('nombre')
           <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            {!! Form::label('categoria', 'Categoria') !!}
            {!! Form::text('categoria', null, ['class'=>'form-control','placeholder'=>'']) !!}
       
            @error('categoria')
            <span class="text-danger">{{$message}}</span>
             @enderror
       </div>

        <div class="form-group">
            {!! Form::label('cantidad', 'Cantidad') !!}
            {!! Form::number('cantidad', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('cantidad')
              <span class="text-danger">{{$message}}</span>
            @enderror        
        </div>

        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop
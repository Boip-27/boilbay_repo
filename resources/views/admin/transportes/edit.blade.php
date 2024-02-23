@extends('adminlte::page')

@section('title', 'Editar un vehículo')

@section('content_header')
    <h1>Editar vehículo </h1>
@stop

@section('content')
@if (session('mensaje'))
    <div class="class alert alert-success">
        <strong>{{session('mensaje')}} </strong>
    </div>  
@endif

<div class="card">
    <div class="card-body">

    {!! Form::model($transporte, ['route'=>['admin.transportes.update', $transporte], 'method'=>'PUT']) !!}
    <div class="form-group" style="width: 35%">
        {!! Form::label('tipo', 'Tipo') !!}
        {!! Form::text('tipo', null, ['class'=>'form-control', 'placeholder'=>'Tipo de vehículo']) !!}
    @error('tipo')
       <span class="text-danger">{{$message}}</span>
    @enderror
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('marca', 'Marca') !!}
        {!! Form::text('marca', null, ['class'=>'form-control','placeholder'=>'Marca del vehículo']) !!}
   
        @error('marca')
        <span class="text-danger">{{$message}}</span>
         @enderror
   </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('modelo', 'Modelo') !!}
        {!! Form::text('modelo', null, ['class'=>'form-control', 'placeholder'=>'Modelo del vehículo']) !!}
        @error('modelo')
          <span class="text-danger">{{$message}}</span>
        @enderror        
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('placa', 'Placa') !!}
        {!! Form::text('placa', null, ['class'=>'form-control', 'placeholder'=>'Placa del vehículo']) !!}
        @error('placa')
        <span class="text-danger">{{$message}}</span>
      @enderror  
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('chasis', 'Chasis') !!}
        {!! Form::text('chasis', null, ['class'=>'form-control', 'placeholder'=>'Serie del chasis']) !!}
        @error('chasis')
        <span class="text-danger">{{$message}}</span>
      @enderror  
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('motor', 'Motor') !!}
        {!! Form::text('motor', null, ['class'=>'form-control','placeholder'=>'Serie del motor']) !!}
        @error('motor')
        <span class="text-danger">{{$message}}</span>
      @enderror  
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('kilometraje', 'Kilometraje') !!}
        {!! Form::number('kilometraje', null, ['class'=>'form-control','placeholder'=>'Kilometraje']) !!}
        @error('kilometraje')
        <span class="text-danger">{{$message}}</span>
      @enderror 
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('cilindraje', 'Cilindraje') !!}
        {!! Form::number('cilindraje', null, ['class'=>'form-control','placeholder'=>'Cilindraje']) !!}
        @error('cilindraje')
        <span class="text-danger">{{$message}}</span>
      @enderror 
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('carga', 'Carga') !!}
        {!! Form::text('carga', null, ['class'=>'form-control','placeholder'=>'Capacidad de carga']) !!}
        @error('carga')
        <span class="text-danger">{{$message}}</span>
      @enderror 
    </div>

    <div class="form-group" style="width: 35%">
        {!! Form::label('pasajeros', 'Pasajeros') !!}
        {!! Form::number('pasajeros', null, ['class'=>'form-control','placeholder'=>'Capacidad de pasajeros']) !!}
        @error('pasajeros')
        <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
</div>
@stop
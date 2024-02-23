@extends('adminlte::page')

@section('title', 'Crear nuevo vehículo')

@section('content_header')
    <h1>Crear nuevo registro vehicular</h1>
@stop

@section('content')
@if (session('mensaje'))
    <div class="class alert alert-success">
        <strong>{{session('mensaje')}} </strong>
    </div>  
@endif
    <div class="card">
        <div class="card-body">

        {!! Form::open(['route' => 'admin.transportes.store']) !!}
        <div class="form-group" style="width: 35%">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo', null, ['class'=>'form-control', 'placeholder'=>'Automovil, Camioneta, Motocicleta']) !!}
        @error('tipo')
           <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('marca', 'Marca') !!}
            {!! Form::text('marca', null, ['class'=>'form-control','placeholder'=>'']) !!}
       
            @error('marca')
            <span class="text-danger">{{$message}}</span>
             @enderror
       </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('modelo', 'Modelo') !!}
            {!! Form::text('modelo', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('modelo')
              <span class="text-danger">{{$message}}</span>
            @enderror        
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('placa', 'Placa') !!}
            {!! Form::text('placa', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('placa')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('chasis', 'Chasis') !!}
            {!! Form::text('chasis', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('chasis')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('motor', 'Motor') !!}
            {!! Form::text('motor', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('motor')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('kilometraje', 'Kilometraje') !!}
            {!! Form::number('kilometraje', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('kilometraje')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('cilindraje', 'Cilindraje') !!}
            {!! Form::number('cilindraje', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('cilindraje')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('carga', 'Carga') !!}
            {!! Form::text('carga', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('carga')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('pasajeros', 'Pasajeros') !!}
            {!! Form::number('pasajeros', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('pasajeros')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop
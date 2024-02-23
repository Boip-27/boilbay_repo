@extends('adminlte::page')

@section('title', 'Registrar nuevo usuario')

@section('content_header')
    <h1>Crear nuevo registro</h1>
@stop
<ul>
  
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>

@section('content')
@if (session('mensaje'))
    <div class="class alert alert-success">
        <strong>{{session('mensaje')}} </strong>
    </div>  
@endif
    <div class="card">
        <div class="card-body">

        {!! Form::open(['route' => 'admin.users.store']) !!}
        
        <div class="form-group" style="width: 35%">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'']) !!}
       
            @error('name')
            <span class="text-danger">{{$message}}</span>
             @enderror
       </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('cédula', 'Cédula') !!}
            {!! Form::number('identify', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('identify')
              <span class="text-danger">{{$message}}</span>
            @enderror        
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('fecha', 'Fecha de Nacimiento') !!}
            {!! Form::date('birth', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('birth')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('tipo', 'Tipo de Sangre') !!}
            {!! Form::text('blood', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('blood')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('ciudad', 'Ciudad de Nacimiento') !!}
            {!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('city')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('celular', 'Celular') !!}
            {!! Form::number('phone', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('phone')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('grado', 'Grado') !!}
            {!! Form::text('grade', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('grade')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('correo', 'Correo') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
            @error('email')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('contraseña', 'Contraseña') !!}
            {!! Form::password('password', null, ['class'=>'form-control']) !!}
            @error('password')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          

        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop


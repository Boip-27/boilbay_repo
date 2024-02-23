@extends('adminlte::page')

@section('title', 'Nueva dependencia')

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

        {!! Form::open(['route' => 'admin.dependencias.store']) !!}
        <div class="form-group" style="width: 35%">
            {!! Form::label('provincia', 'Provincia') !!}
            {!! Form::text('provincia', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
        @error('provincia')
           <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('parroquia', 'Parroquia') !!}
            {!! Form::text('parroquia', null, ['class'=>'form-control','placeholder'=>'']) !!}
       
            @error('parroquia')
            <span class="text-danger">{{$message}}</span>
             @enderror
       </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('n° distrito', 'N° Distrito') !!}
            {!! Form::number('num_distrito', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('num_distrito')
              <span class="text-danger">{{$message}}</span>
            @enderror        
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('coddistrito', 'CodDistrito') !!}
            {!! Form::text('cod_distrito', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('cod_distrito')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('distrito', 'Distrito') !!}
            {!! Form::text('distrito', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('distrito')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('numcircuito', 'NumCircuito') !!}
            {!! Form::number('num_circuito', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('num_circuito')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('codcircuito', 'CodCircuito') !!}
            {!! Form::text('cod_circuito', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('cod_circuito')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('circuito', 'Circuito') !!}
            {!! Form::text('circuito', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('circuito')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('numsubcircuito', 'NumSubcircuito') !!}
            {!! Form::number('num_subcircuito', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('num_subcircuito')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('codsubcircuito', 'CodSubcircuito') !!}
            {!! Form::text('cod_subcircuito', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('cod_subcircuito')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('subcircuito', 'Subcircuito') !!}
            {!! Form::text('subcircuito', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('subcircuito')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

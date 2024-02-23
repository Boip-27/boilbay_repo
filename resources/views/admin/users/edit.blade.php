@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
@if (session('mensaje'))
    <div class="class alert alert-success">
        <strong>{{session('mensaje')}} </strong>
    </div>  
@endif
    <div class="card">
        <div class="card-body">

        {!! Form::model($user,['route' => ['admin.users.update',$user], 'method'=>'PUT']) !!}
            <div class="form-group" style="width: 35%">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'']) !!}
       
            @error('name')
            <span class="text-danger">{{$message}}</span>
             @enderror
       </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('identify', 'Identify') !!}
            {!! Form::text('identify', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('identify')
              <span class="text-danger">{{$message}}</span>
            @enderror        
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('birth', 'Birth') !!}
            {!! Form::date('birth', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('birth')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('blood', 'Blood') !!}
            {!! Form::text('blood', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
            @error('blood')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('city', 'City') !!}
            {!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('city')
            <span class="text-danger">{{$message}}</span>
          @enderror  
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('phone', 'Phone') !!}
            {!! Form::number('phone', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('phone')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

        <div class="form-group" style="width: 35%">
            {!! Form::label('grade', 'Grade') !!}
            {!! Form::text('grade', null, ['class'=>'form-control','placeholder'=>'']) !!}
            @error('grade')
            <span class="text-danger">{{$message}}</span>
          @enderror 
        </div>

       <h2 class="h5">Seleccione un Rol</h2>
        {!! Form::model($user, ['route'=>['admin.users.update', $user], 'method'=>'put']) !!}
        @foreach ($roles as $role)
        <div>
          <label>
            {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
            {{$role->name}}

          </label>
        </div>

        @endforeach

        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop


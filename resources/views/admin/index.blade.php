@extends('adminlte::page')

@section('title', 'Sistema de Gestión Vehicular')

@section('content_header')
   
    <div class="container">
        <div class = "row">
            <div class= "col-12">
                <h1 class = "text-center"><img src="{{asset('vendor/adminlte/dist/img/PNlogo.png')}}" width="40" height="40"><b>SISEMA DE GESTIÓN VEHICULAR</b></h1>
            </div>
            <div class= "col-12">
                <h1 class = "text-right">{{now()->format('d/m/y')}} </h1>

            </div>
                
        </div>

    </div>

@stop

@section('content')
    <p>Bienvenido al sistemagestión vehicular de la Policia Nacional</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
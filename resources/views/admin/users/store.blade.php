@extends('layout.app')

@section('content')
@inject('userVehiculo', 'App\Services\userVehiculo')
<div class='container'>
    <div class='row justify content center'>
        <div class='col-dm-8'>
            <div class="card">
                <div class="card-header">Agregar Usuario </div>

                    <div class="card-body">
                        <form method= 'post' action="{{route ('users.store')}}" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type='text' class='form-control'{{$error->has('name')}}>

                                @if ($errors->has('name'))
                                <span class="invalid-feeback" role='alert'>
                                    <strong>{{$errors->first('name')}} </strong>
                                </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="userVehiculo" class="col-md-4 col-form-label text-md-right">Vehiculo</label>
    
                                <div class="col-md-6">
                                    <select name="userVehiculo_id" id="userVehiculo" class="form-control"{{$errors->has('name')}} >
                                    @foreach ($userVehiculos->get() as $index=>$userVehiculo)
                                        <option value="{{$index}}"{{old('userVehiculo_id') --$index}}>
                                        {{$userVehiculo}}
                                        </option>
                                    @endforeach
                                    </select>
    
                                    @if ($errors->has('userVehiculo_id'))
                                    <span class="invalid-feeback" role='alert'>
                                        <strong>{{$errors->first('userVehiculo_id')}} </strong>
                                    </span>
                                    @endif
                                </div>


                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
    
@endsection
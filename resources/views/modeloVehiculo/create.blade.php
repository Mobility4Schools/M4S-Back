@extends('layouts.index')

@section('title')
    Agregar Modelo de Vehiculo
@endsection

@section('content')
<br><br>
    {{ Form::open(['route'=>'modeloVehiculo.store','method'=>'post']) }}
         @include('modeloVehiculo.fields')
        {{ Form::submit('Agregar') }}
   {{ Form::close() }}
   <br><br>
@endsection
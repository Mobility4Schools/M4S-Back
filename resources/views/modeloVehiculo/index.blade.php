@extends('layouts.index')

@section('title')
    Lista de Categorias
@endsection

@section('content')
<br>
<div class="container">
<a href="{{ route('modeloVehiculo.create') }}">Nuevo Modelo de Vehiculo</a>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nro. Asientos</th>
      <th scope="col">Nro. Pasajeros</th>
      <th scope="col">Marca</th>
      <th scope="col">T. Vehiculo</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

        @foreach($models as $model)
        <tr>
        <th scope="row">{{ $model->id_mVehiculo }}</th>
            <td>{{ $model->mv_nombre }}</td>
            <td>{{ $model->mv_nroAsientos }}</td>
            <td>{{ $model->mv_nroPasajeros }}</td>
            <td>{{ $model->marcas->m_nombre }}</td>
            <td>{{ $model->tipoVehiculo->tv_nombre }}</td>
            <td>{{ $model->mv_status }}</td>
            <td>
            <a href="{{ route('modeloVehiculo.edit',$model->id_mVehiculo) }}">Editar</a>
            <a href="{{ route('modeloVehiculo.delete',$model->id_mVehiculo) }}">Eliminar</a>
            </td>
        </tr>
         @endforeach
         </tbody>
     </table>    
    <br>
    <div class="row justify-content-end">
    {{ $models->render() }}
    </div>
    </div>


@endsection
{{ Form::label('nombre','Nombre') }}
{{ Form::text('mv_nombre') }}<br>
{{ Form::label('nroAsientos','Nro. Asientos') }}
{{ Form::text('mv_nroAsientos') }}<br>
{{ Form::label('nroPasajeros','Nro. Pasajeros') }}
{{ Form::text('mv_nroPasajeros') }}<br>

{{ Form::label('marca','Marca') }}
{{ Form::select('id_marcas',$marcas) }}<br>

{{ Form::label('tVehiculo','T. Vehiculo') }}
{{ Form::select('id_tVehiculo',$tvehiculo) }}<br>
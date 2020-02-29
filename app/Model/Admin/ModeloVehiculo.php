<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model
{
    public $table = 'modelo_vehiculo';
    public $fillable = ['mv_nombre','mv_nroAsientos', 'mv_nroPasajeros', 'id_marcas','id_tVehiculo','usuario_create','usuario_update'];
    public function marcas(){
        return $this->belongsTo('App\Model\Admin\Marcas');
    }
    public function tipoVehiculo(){
        return $this->belongsTo('App\Model\Admin\TipoVehiculo');
    }
}

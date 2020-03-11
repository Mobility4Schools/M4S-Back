<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model
{
    public $primaryKey = 'id_mVehiculo';
    public $table = 'modelo_vehiculo';
    public $fillable = ['mv_nombre','mv_nroAsientos', 
                        'mv_nroPasajeros', 
                        'id_marcas','id_tVehiculo',
                        'mv_status','usuario_create','usuario_update'];

    public function marcas(){
        return $this->belongsTo('App\Model\Admin\Marcas' , 'id_marcas', 'id_marcas');
    }
    public function tipoVehiculo(){
        return $this->belongsTo('App\Model\Admin\TipoVehiculo' , 'id_tVehiculo', 'id_tVehiculo');
    }
}

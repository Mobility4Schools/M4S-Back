<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    public $table = 'tipo_vehiculo';
    public $fillable = ['tv_nombre','tv_status'];
}

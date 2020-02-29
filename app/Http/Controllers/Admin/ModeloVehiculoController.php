<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\ModeloVehiculo;
use App\Model\Admin\TipoVehiculo;
use App\Model\Admin\Marcas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModeloVehiculoController extends Controller
{
    public function index(){
        $models = ModeloVehiculo::paginate(5);
        return view('modeloVehiculo.index',compact('models'));
    }
    public function create(){
        $marcas = Marcas::all()->pluck('m_nombre','id_marcas');
        $tvehiculo = TipoVehiculo::all()->pluck('tv_nombre','id_tVehiculo');
        return view('modeloVehiculo.create',compact('marcas','tvehiculo'));
    }

    public function store(Request $request){
        $data = $request->all();
        $data['mv_status'] = '1';
        $data['usuario_create'] = 1;
        $data['usuario_update'] = 1;
        $model = ModeloVehiculo::create($data);
        return redirect()->route('modeloVehiculo.index');
    }


}

<?php

namespace App\Http\Controllers;

use App\Model\ModeloVehiculo;
use App\Model\TipoVehiculo;
use App\Model\Marcas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModeloVehiculoController extends Controller
{
    public function index(){
        $models = ModeloVehiculo::paginate(5);
        //$models = ModeloVehiculo::all();
      //  dd($models);
        return view('modeloVehiculo.index',compact('models'));
    }
    public function create(){
        $marcas = Marcas::all()->pluck('m_nombre','id_marcas');
        $tvehiculo = TipoVehiculo::all()->pluck('tv_nombre','id_tVehiculo');
        return view('modeloVehiculo.create',compact('marcas','tvehiculo'));
    }

    public function store(Request $request){
        
        $modelvehiculo = new ModeloVehiculo();
        
        $modelvehiculo->mv_nombre = $request->input('mv_nombre');
        $modelvehiculo->mv_nroAsientos = $request->input('mv_nroAsientos');
        $modelvehiculo->mv_nroPasajeros = $request->input('mv_nroPasajeros');
        $modelvehiculo->id_marcas = $request->input('id_marcas');
        $modelvehiculo->id_tVehiculo = $request->input('id_tVehiculo');
        $modelvehiculo->mv_status = $request->input('mv_status');
        $modelvehiculo->usuario_create = $request->input('usuario_create');
        $modelvehiculo->usuario_update = $request->input('usuario_update');
        $modelvehiculo->save();
                //return $data;
        //dd($request);
       // $models = ModeloVehiculo::create($data);
        return response()->json($modelvehiculo);
        //return redirect()->route('modeloVehiculo.index');
    }

    public function show(){
        $modelvehiculo = ModeloVehiculo::all();
        return response()->json($modelvehiculo);
    }

    public function showbyid($id){
        $modelvehiculo = ModeloVehiculo::find($id);
        return response()->json($modelvehiculo);
    }

    public function updatebyid(Request $request,$id){
        $modelvehiculo = ModeloVehiculo::find($id);
        $modelvehiculo->mv_nombre = $request->input('mv_nombre');
        $modelvehiculo->mv_nroAsientos = $request->input('mv_nroAsientos');
        $modelvehiculo->mv_nroPasajeros = $request->input('mv_nroPasajeros');
        $modelvehiculo->id_marcas = $request->input('id_marcas');
        $modelvehiculo->id_tVehiculo = $request->input('id_tVehiculo');
        $modelvehiculo->mv_status = $request->input('mv_status');
        $modelvehiculo->usuario_update = $request->input('usuario_update');
        $modelvehiculo->save();
        return response()->json($modelvehiculo);
    }
    


}

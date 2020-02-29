<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'modeloVehiculo'],function(){
    Route::get('/',['as'=>'modeloVehiculo.index','uses'=>'Admin\ModeloVehiculoController@index']);
    Route::get('create',['as'=>'modeloVehiculo.create','uses'=>'Admin\ModeloVehiculoController@create']);
    Route::post('create',['as'=>'modeloVehiculo.store','uses'=>'Admin\ModeloVehiculoController@store']);
    Route::get('edit/{id}',['as'=>'modeloVehiculo.edit','uses'=>'Admin\ModeloVehiculoController@edit']);
    Route::post('edit/{id}',['as'=>'modeloVehiculo.update','uses'=>'Admin\ModeloVehiculoController@update']);
    Route::get('delete/{id}',['as'=>'modeloVehiculo.delete','uses'=>'Admin\ModeloVehiculoController@delete']);
});
<?php

use Illuminate\Database\Seeder;

class TipoVehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ( 'tipo_vehiculo' ) -> delete ();
        DB :: table ( 'tipo_vehiculo' ) -> insert ([
            
            [
                'tv_nombre' => 'Minivan',
                'tv_status' => '1'
            ],
            [
                'tv_nombre' => 'Combi',
                'tv_status' => '1'
            ],
            [
                'tv_nombre' => 'Microbus',
                'tv_status' => '1'
            ],
            [
                'tv_nombre' => 'Auto',
                'tv_status' => '1'
            ]
            ]);
    }
}

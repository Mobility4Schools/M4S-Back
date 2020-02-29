<?php

use Illuminate\Database\Seeder;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ( 'tipo_usuario' ) -> delete ();
        DB :: table ( 'tipo_usuario' ) -> insert ([
            
            [
                'tu_nombre' => 'Conductor',
                'tu_status' => '1'
            ],
            [
                'tu_nombre' => 'Tutor',
                'tu_status' => '1'
            ],
            [
                'tu_nombre' => 'Administrador',
                'tu_status' => '1'
            ],
            [
                'tu_nombre' => 'Menor',
                'tu_status' => '1'
            ]
            ]);
    }
}

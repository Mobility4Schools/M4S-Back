<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ( 'usuario' ) -> delete ();
        DB :: table ( 'usuario' ) -> insert ([
            
            [
                'us_nombres' => 'Jhonata Harris',
                'us_apellidos' => 'Leon Leon',
                'us_RazonSocial' => 'Jhonatan Harris Leon Leon',
                'id_tDocumento' => 1,
                'us_nroDocumento' => '43032941',
                'us_fechaNacimiento' => '1985-05-10',
                'us_correo' => 'jhonatan1085@gmail.com',
                'us_clave' => '43032941',
                'id_tUsuario' => 3,
                'us_status' => '1'
            ]
            ]);
    }
}

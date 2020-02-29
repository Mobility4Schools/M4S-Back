<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ( 'departamento' ) -> delete ();

        DB :: table ( 'departamento' ) -> insert ([
            
            [
                'id_departamento' => 1 ,
                'dpt_nombre' => 'AMAZONAS',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 2 ,
                'dpt_nombre' => 'ANCASH',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 3 ,
                'dpt_nombre' => 'APURIMAC',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 4 ,
                'dpt_nombre' => 'AREQUIPA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 5 ,
                'dpt_nombre' => 'AYACUCHO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 6 ,
                'dpt_nombre' => 'CAJAMARCA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 7 ,
                'dpt_nombre' => 'CALLAO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 8 ,
                'dpt_nombre' => 'CUSCO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 9 ,
                'dpt_nombre' => 'HUANCAVELICA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 10 ,
                'dpt_nombre' => 'HUANUCO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 11 ,
                'dpt_nombre' => 'ICA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 12 ,
                'dpt_nombre' => 'JUNIN',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 13 ,
                'dpt_nombre' => 'LA LIBERTAD',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 14,
                'dpt_nombre' => 'LAMBAYEQUE',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 15 ,
                'dpt_nombre' => 'LIMA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 16 ,
                'dpt_nombre' => 'LORETO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 17 ,
                'dpt_nombre' => 'MADRE DE DIOS',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 18 ,
                'dpt_nombre' => 'MOQUEGUA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 19,
                'dpt_nombre' => 'PASCO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 20 ,
                'dpt_nombre' => 'PIURA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 21 ,
                'dpt_nombre' => 'PUNO',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 22 ,
                'dpt_nombre' => 'SAN MARTIN',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 23 ,
                'dpt_nombre' => 'TACNA',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 24 ,
                'dpt_nombre' => 'TUMBES',
                'dpt_status' => '1',
            ],
            [
                'id_departamento' => 25 ,
                'dpt_nombre' => 'UCAYALI',
                'dpt_status' => '1',
            ]
        ]);
    }
}

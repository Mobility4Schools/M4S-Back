<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ( 'marcas' ) -> delete ();
        DB :: table ( 'marcas' ) -> insert ([
            
            [
                'm_nombre' => 'Toyota',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Volkswagen',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Chevrolet',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Nissan',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Mitsubishi',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Renault',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Hyundai',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Suzuki',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Citroen',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Fiat',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Chery',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Ssang Yong',
                'm_status' => '1'
            ]
            ,
            [
                'm_nombre' => 'Haval',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Foton',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Great Wall',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Jac',
                'm_status' => '1'
            ],
            [
                'm_nombre' => 'Changan',
                'm_status' => '1'
            ]
            ]);
    }
}

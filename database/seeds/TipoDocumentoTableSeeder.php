<?php

use Illuminate\Database\Seeder;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ( 'tipo_documento' ) -> delete ();
        DB :: table ( 'tipo_documento' ) -> insert ([
            
            [
                'td_nombre' => 'LIBRETA ELECTORAL O DNI',
                'td_abreviatura' => 'L.E / DNI',
                'td_longitud' => 8,
                'td_usuario' => '1',
                'td_conductor' => '0',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'CARNET DE EXTRANJERIA',
                'td_abreviatura' => 'CARNET EXT.',
                'td_longitud' => 12,
                'td_usuario' => '1',
                'td_conductor' => '0',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'REG. UNICO DE CONTRIBUYENTES',
                'td_abreviatura' => 'RUC',
                'td_longitud' => 11,
                'td_usuario' => '1',
                'td_conductor' => '0',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'PASAPORTE',
                'td_abreviatura' => 'PASAPORTE',
                'td_longitud' => 12,
                'td_usuario' => '1',
                'td_conductor' => '0',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'PART. DE NACIMIENTO-IDENTIDAD',
                'td_abreviatura' => 'P. NAC.',
                'td_longitud' => 15,
                'td_usuario' => '1',
                'td_conductor' => '0',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'OTROS',
                'td_abreviatura' => 'OTROS',
                'td_longitud' => 15,
                'td_usuario' => '1',
                'td_conductor' => '1',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'Seguro Obligatorio de Accidentes de Tránsito',
                'td_abreviatura' => 'SOAT',
                'td_longitud' => 15,
                'td_usuario' => '0',
                'td_conductor' => '1',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'Tarjeta de Identificación Vehicular',
                'td_abreviatura' => 'TIV',
                'td_longitud' => 15,
                'td_usuario' => '0',
                'td_conductor' => '1',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'Certificado de Revisión Técnica Vehicular',
                'td_abreviatura' => 'CRTV',
                'td_longitud' => 15,
                'td_usuario' => '0',
                'td_conductor' => '1',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'Antecedentes Penales',
                'td_abreviatura' => 'An. Pen.',
                'td_longitud' => 15,
                'td_usuario' => '0',
                'td_conductor' => '1',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'Foto',
                'td_abreviatura' => 'Foto',
                'td_longitud' => 15,
                'td_usuario' => '0',
                'td_conductor' => '1',
                'td_status' => '1'
            ],
            [
                'td_nombre' => 'Licencia de Conducir',
                'td_abreviatura' => 'Brevete',
                'td_longitud' => 15,
                'td_usuario' => '0',
                'td_conductor' => '1',
                'td_status' => '1'
            ]
            ]);
    }
}

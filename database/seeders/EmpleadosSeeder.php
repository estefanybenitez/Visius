<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre_empleado' => 'Juan Perez',
            'correo' => 'juan.perez22@itca.edu.sv',
            'telefono' => '7748-2022',
            'fecha_nacimiento' => '2003-10-01',
            'fecha_ingreso' => '2023-09-10',
            'direccion' => 'calle principal',
            'id_rol' => '1',
            'id_are' => '1',




            'created_at' =>Carbon::now()
        ]);
    }
}

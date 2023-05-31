<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre_area' => 'departamento1',
            'created_at' =>Carbon::now()
        ]);
            //Insert data into table
            DB::table('area')->insert($data);
    }
}

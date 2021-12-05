<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Situaciones extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Situaciones')->insert(['Actor'=>'Padre de Familia', 'Descripcion'=>'Tu marido es tienes que aguantar!', 'BotonSi'=>'Estoy de acuerdo', 'BotonNo'=>'No estoy de acuerdo.']);

        DB::table('Situaciones')->insert(['Actor'=>'Padre de Familia', 'Descripcion'=>'Tu marido es tienes que aguantar!', 'BotonSi'=>'Estoy de acuerdo', 'BotonNo'=>'No estoy de acuerdo.']);
    }
}

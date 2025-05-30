<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GGUUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gguus')->insert([
            'gguu' => 'DN-5',
            'descripcion_gguu' => 'Quinto Distrito Naval "SANTA CRUZ',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('gguus')->insert([
            'gguu' => 'DPTO VII',
            'descripcion_gguu' => 'Departamento VII "PARTICIPACIÓN AL DESARROLLO"',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('gguus')->insert([
            'gguu' => 'DGIN',
            'descripcion_gguu' => 'Dirección General de Infraestructura Naval',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('gguus')->insert([
            'gguu' => 'SNHN',
            'descripcion_gguu' => 'Servicio Nacional de Hidrografía Naval',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('gguus')->insert([
            'gguu' => 'COSSMIL',
            'descripcion_gguu' => 'Corporación del Seguro Social Militar',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('gguus')->insert([
            'gguu' => 'MINDEF',
            'descripcion_gguu' => 'Ministerio de Defensa',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

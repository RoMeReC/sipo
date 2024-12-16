<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            'departamento' => 'LP',
            'descripcion_departamento' => 'La Paz',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'OR',
            'descripcion_departamento' => 'Oruro',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'PT',
            'descripcion_departamento' => 'Potosí',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'CB',
            'descripcion_departamento' => 'Cochabamba',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'CH',
            'descripcion_departamento' => 'Chuquisaca',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'TJ',
            'descripcion_departamento' => 'Tarija',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'PD',
            'descripcion_departamento' => 'Pando',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'BN',
            'descripcion_departamento' => 'Beni',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('departamentos')->insert([
            'departamento' => 'SC',
            'descripcion_departamento' => 'Santa Cruz',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

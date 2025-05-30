<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UUDDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('uudds')->insert([
            'uudd' => 'Cmdo. DN-5',
            'descripcion_uudd' => 'Comando de Distrito',
            'gguu_id' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'BNTA.',
            'descripcion_uudd' => 'Base Naval "TAMENGO',
            'gguu_id' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'BIMC',
            'descripcion_uudd' => 'Batallón de Infantería de Marina V "CALAMA"',
            'gguu_id' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'CPMQ',
            'descripcion_uudd' => 'Capitanía de Puerto Mayor "QUIJARRO"',
            'gguu_id' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'UOIN',
            'descripcion_uudd' => 'Unidad Operativa de Industria Naval "PUERTO QUIJARRO"',
            'gguu_id' => 2,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'UOSP',
            'descripcion_uudd' => 'Unidad Operativa de Servicios Portuarios "HIDROVÍA PARAGUAY - PARANÁ"',
            'gguu_id' => 2,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'UOSPG',
            'descripcion_uudd' => 'Unidad Operativa de Servicios y Producción Ganadera "TAMARINERO"',
            'gguu_id' => 2,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'UEPES',
            'descripcion_uudd' => 'Unidad Ejecutora del Proyecto de la Escuela de Sargentos',
            'gguu_id' => 3,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'SNHN "PUERTO SUAREZ"',
            'descripcion_uudd' => 'Servicio Nacional de Hidrografía Naval "PUERTO SUAREZ"',
            'gguu_id' => 4,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'REG. COSSMIL "PUERTO SUAREZ"',
            'descripcion_uudd' => 'Regional de la Corporación del Seguro Social Militar "PUERTO SUAREZ"',
            'gguu_id' => 5,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'RIBB "PUERTO QUIJARRO"',
            'descripcion_uudd' => 'Agencia Regional del Registro Internacional Boliviano de Buques "PUERTO QUIJARRO"',
            'gguu_id' => 6,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('uudds')->insert([
            'uudd' => 'ENABOL "PUERTO QUIJARRO"',
            'descripcion_uudd' => 'Agencia Regional de la Empresa Naviera Boliviana "PUERTO QUIJARRO"',
            'gguu_id' => 6,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

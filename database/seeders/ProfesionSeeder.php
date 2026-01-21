<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'profesiones')->insert(['profesion'=>'ING.','descripcion_profesion'=>'Ingeniero(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'LIC.','descripcion_profesion'=>'Licenciado(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'ARQ.','descripcion_profesion'=>'Arquitecto(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'VET.','descripcion_profesion'=>'Veterinario(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'CONT.','descripcion_profesion'=>'Contador(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'DR.','descripcion_profesion'=>'Doctor(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'ENF.','descripcion_profesion'=>'Enfermero(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'TEC.','descripcion_profesion'=>'Técnico','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'SEC.','descripcion_profesion'=>'Secretario(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'ANL.','descripcion_profesion'=>'Analista','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'ABG.','descripcion_profesion'=>'Agogado(a)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table(table: 'profesiones')->insert(['profesion'=>'MED.','descripcion_profesion'=>'Médico','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
    }
}

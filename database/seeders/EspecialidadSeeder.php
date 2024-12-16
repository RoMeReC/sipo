<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especialidades')->insert(['especialidad'=>'','descripcion_especialidad'=>'Sin Especialidad','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DR.','descripcion_especialidad'=>'Abogado','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'AJUR.','descripcion_especialidad'=>'Asesor Jurídico','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'AEMN.','descripcion_especialidad'=>'Auxiliar de Estado Mayor Naval','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CHOF.','descripcion_especialidad'=>'Chofer','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CHOFM.','descripcion_especialidad'=>'Chofer Mecánico','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGIM.','descripcion_especialidad'=>'Cuerpo General de Infantería de Marina','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONAV.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales  Aviación','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGON.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONAD.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Administración','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONCO.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Comunicaciones','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONEL.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Electricidad','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONET.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Electrónica','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONHD.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Hidrografía','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONIM.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Infantería de Marina','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONMQ.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Maquinas','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONMC.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Mar Y Cubierta','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'CGONMS.','descripcion_especialidad'=>'Cuerpo General Operaciones Navales Música','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DAEN.','descripcion_especialidad'=>'Diplomado Altos Estudios Nacionales','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DEMN.','descripcion_especialidad'=>'Diplomado de Comando Y Estado Mayor Naval','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DIM.','descripcion_especialidad'=>'Diplomado de Ingeniería Militar','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DEPSS.','descripcion_especialidad'=>'Diplomado de la Escuela de Perfeccionamiento de Suboficiales y Sargentos','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DEPN.','descripcion_especialidad'=>'Diplomado de La Escuela de Perfeccionamiento Naval','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DEPSSM.','descripcion_especialidad'=>'Diplomado de la Escuela de Perfeccionamiento Suboficiales de Música','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'DESN.','descripcion_especialidad'=>'Diplomado de La Escuela de Suboficiales Navales','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'ELEC.','descripcion_especialidad'=>'Electricista','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'ENF.','descripcion_especialidad'=>'Enfermero (A)','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'MEC.','descripcion_especialidad'=>'Mecánico','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'MECCH.','descripcion_especialidad'=>'Mecánico Chofer','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'MOP.','descripcion_especialidad'=>'Medico Operativo','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'MENS.','descripcion_especialidad'=>'Mensajero','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'NUT.','descripcion_especialidad'=>'Nutricionista','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'PEL.','descripcion_especialidad'=>'Peluquero','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'PSICO.','descripcion_especialidad'=>'Psicología','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'SAN.','descripcion_especialidad'=>'Sanidad','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'SERV.','descripcion_especialidad'=>'Servicios','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('especialidades')->insert(['especialidad'=>'SG.','descripcion_especialidad'=>'Servicios Generales','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
    }
}

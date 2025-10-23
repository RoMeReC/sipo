<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'rol' => 'Super Administrador',
            'descripcion' => 'Usuario con todos los privilegios del sistema',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Administrador',
            'descripcion' => 'Usuario con privilegios administrativos',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Stria. Gral.',
            'descripcion' => 'Secretaría General',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Comandante',
            'descripcion' => 'Comandante de Distrito',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'JEMD',
            'descripcion' => 'Jefe de Estado Mayor Distrital',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'División I',
            'descripcion' => 'División I "PERSONAL"',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'División II',
            'descripcion' => 'División II "INTELIGENCIA"',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'División III',
            'descripcion' => 'División III "OPERACIONES"',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'División IV',
            'descripcion' => 'División IV "LOGÍSTICA"',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'División V',
            'descripcion' => 'División V "POLÍTICAS Y PROYECTOS"',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'RR.PP.',
            'descripcion' => 'Relaciones Públicas',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'AA.JJ.',
            'descripcion' => 'Asesoría Jurídica',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'UAF',
            'descripcion' => 'Unidad de Administración Financiera',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'BB.PP.',
            'descripcion' => 'Unidad de Bienes y Patrimonio',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Archivo',
            'descripcion' => 'Unidad de Arcrivo',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'SOF. CMDO.',
            'descripcion' => 'Suboficial de Comando',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'CNFEDN',
            'descripcion' => 'Centro Nacional de Formación de Expertos en Desastres Naturales',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

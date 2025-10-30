<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_documentos')->insert([
            'tipo_documento' => 'Oficio',
            'descripcion' => 'Documento que refiere envío o recepción a nivel local o físico',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('tipo_documentos')->insert([
            'tipo_documento' => 'FAX',
            'descripcion' => 'Documento que refiere envío o recepción a nivel nacional en digital',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('tipo_documentos')->insert([
            'tipo_documento' => 'CORREO ELECTRÓNICO',
            'descripcion' => 'Documento que refiere envío o recepción a nivel local o nacional en digital',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('tipo_documentos')->insert([
            'tipo_documento' => 'NOTA DE SERVICIO',
            'descripcion' => 'Documento que refiere la asignación de tareas o trabajos a nivel local',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('tipo_documentos')->insert([
            'tipo_documento' => 'CARTA',
            'descripcion' => 'Documento formal dirigido a una persona en particular de forma física',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}
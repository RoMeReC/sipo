<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grados')->insert([
            'grado' => 'Cap. Nav.',
            'descripcion_grado' => 'Capitán de Navío',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Cap. Frag.',
            'descripcion_grado' => 'Capitán de Fragata',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Cap. Corb.',
            'descripcion_grado' => 'Capitán de Corbeta',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Tte. Nav.',
            'descripcion_grado' => 'Teniente de Navío',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Tte. Frag.',
            'descripcion_grado' => 'Teniente de Fragata',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Alf.',
            'descripcion_grado' => 'Alférez',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sof. Mtre.',
            'descripcion_grado' => 'Suboficial Maestre',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sof. My.',
            'descripcion_grado' => 'Suboficial Mayor',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sof. 1ro.',
            'descripcion_grado' => 'Suboficial Primero',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sof. 2do.',
            'descripcion_grado' => 'Suboficial Segundo',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sof. Incl.',
            'descripcion_grado' => 'Suboficial Inicial',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sgto. 1ro.',
            'descripcion_grado' => 'Sargento Primero',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sgto. 2do.',
            'descripcion_grado' => 'Sargento Segundo',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Sgto. Incl.',
            'descripcion_grado' => 'Sargento Inicial',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NP. I',
            'descripcion_grado' => 'Nivel Profesional I',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NP. II',
            'descripcion_grado' => 'Nivel Profesional II',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NP. III',
            'descripcion_grado' => 'Nivel Profesional III',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NP. VI',
            'descripcion_grado' => 'Nivel Profesional VI',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NP. V',
            'descripcion_grado' => 'Nivel Profesional V',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NT. I',
            'descripcion_grado' => 'Nivel Técnico I',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NT. II',
            'descripcion_grado' => 'Nivel Técnico II',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NT. III',
            'descripcion_grado' => 'Nivel Técnico III',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NT. VI',
            'descripcion_grado' => 'Nivel Técnico VI',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'NT. V',
            'descripcion_grado' => 'Nivel Técnico V',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'ADM. I',
            'descripcion_grado' => 'Administrativo I',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'ADM. II',
            'descripcion_grado' => 'Administrativo II',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'ADM. III',
            'descripcion_grado' => 'Administrativo III',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'ADM. VI',
            'descripcion_grado' => 'Administrativo VI',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'ADM. V',
            'descripcion_grado' => 'Administrativo V',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'APAD. I',
            'descripcion_grado' => 'Apoyo Administrativo I',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'APAD. II',
            'descripcion_grado' => 'Apoyo Administrativo II',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'APAD. III',
            'descripcion_grado' => 'Apoyo Administrativo III',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'APAD. VI',
            'descripcion_grado' => 'Apoyo Administrativo VI',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'APAD. V',
            'descripcion_grado' => 'Apoyo Administrativo V',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Mro.',
            'descripcion_grado' => 'Marinero',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Mro. 1ra.',
            'descripcion_grado' => 'Marinero de Primera',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('grados')->insert([
            'grado' => 'Cabo Cons.',
            'descripcion_grado' => 'Cabo Conscripto',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

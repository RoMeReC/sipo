<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas')->insert([
            'nombres' => 'Romer Hernán',
            'primer_apellido' => 'Eyzaguirre',
            'segundo_apellido' => 'Calla',
            'carnet_identidad' => '5123247',
            'fecha_nacimiento' => '1986-08-07',
            'celular' => 73999857,
            'auth_user' => 1,
            'avatar_id' => 1,
            'profesion_id' => 1,
            'municipio_id' => 156,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

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
    }
}

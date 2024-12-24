<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('p_usuarios')->insert([
            'usuario_id' => 1,
            'permiso_id' => 1,
            'activo' => true,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('p_usuarios')->insert([
            'usuario_id' => 1,
            'permiso_id' => 2,
            'activo' => true,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('p_usuarios')->insert([
            'usuario_id' => 1,
            'permiso_id' => 3,
            'activo' => true,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('p_usuarios')->insert([
            'usuario_id' => 1,
            'permiso_id' => 4,
            'activo' => true,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('p_usuarios')->insert([
            'usuario_id' => 1,
            'permiso_id' => 5,
            'activo' => true,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

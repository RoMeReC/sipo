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
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Gerente',
            'descripcion' => 'Usuario con privilegios administrativos de Control y Supervisión',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Administrativo',
            'descripcion' => 'Personal dedicado a la Administración del Sistema',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'rol' => 'Veterinario',
            'descripcion' => 'Personal dedicado a la atención y control veterinario',
            'activo' => true,
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

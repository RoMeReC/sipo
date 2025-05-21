<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('avatares')->insert([
            'picture' => 'avatar-hombre.png',
            'path_picture' => 'images/avatar/avatar-hombre.png',
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('avatares')->insert([
            'picture' => 'avatar-mujer.png',
            'path_picture' => 'images/avatar/avatar-mujer.png',
            'auth_user' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

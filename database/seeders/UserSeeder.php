<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'romerec',
            'email' => 'nanreh87@hotmail.com',
            'password' => bcrypt('19021314'),
            'rol_id' => 1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admromerec',
            'email' => 'nanreh5123247@gmail.com',
            'password' => bcrypt('19021314'),
            'rol_id' => 2,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'rheyzaguirrec',
            'email' => 'rheyzaguirrec@gmail.com',
            'password' => bcrypt('19021314'),
            'rol_id' => 3,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
    }
}

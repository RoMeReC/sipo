<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProfesionSeeder::class,  
            DepartamentoSeeder::class,
            ProvinciaSeeder::class,
            MunicipioSeeder::class,
            RolSeeder::class,
            PermisoSeeder::class,
            AvatarSeeder::class,
            PersonaSeeder::class,
            UserSeeder::class,
            PUsuarioSeeder::class,
        ]);
    }
}

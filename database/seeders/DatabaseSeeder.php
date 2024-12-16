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
            CondicionSeeder::class,
            GradoSeeder::class,
            EspecialidadSeeder::class,
            GGUUSeeder::class,
            UUDDSeeder::class,
            GeneroSeeder::class,    
            DepartamentoSeeder::class,
            ProvinciaSeeder::class,
            MunicipioSeeder::class,
            RolSeeder::class,
            PersonaSeeder::class,
            ServidorSeeder::class,
            UserSeeder::class,
        ]);
    }
}

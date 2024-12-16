<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provincias')->insert(['provincia' => 'Aroma','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Bautista Saavedra','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Camacho','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Caranavi','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Franz Tamayo','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'General José Manuel Pando','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Gualberto Villarroel','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Ingavi','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Inquisivi','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Iturralde','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Larecaja','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Loayza','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Los Andes','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Manco Kapac','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Muñecas','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Murillo','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Nor Yungas','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Omasuyos','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Pacajes','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sud Yungas','departamento_id' => 1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Abaroa','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Cercado','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Carangas','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Dalence','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Ladislao Cabrera','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Litoral','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Mejillones','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Nor Carangas','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Poopó','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sabaya','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sajama','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'San Pedro de Totora','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Saucarí','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sebastián Pagador','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sud Carangas','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Tomás Barrón','departamento_id' => 2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Alonso de Ibáñez','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Charcas','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Chayanta','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Cornelio Saavedra','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Daniel Campos','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Enrique Baldivieso','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'General Bilbao','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Linares','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Modesto Omiste','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Nor Chichas','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Nor Lípez','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Quijarro','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Rafael Bustillo','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sud Chichas','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sud Lípez','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Tomás Frías','departamento_id' => 3,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Arani','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Arque','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Ayopaya','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Bolívar','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Campero','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Capinota','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Carrasco','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Cercado','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Chapare','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Esteban Arze','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Germán Jordán','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Mizque','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Punata','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Quillacollo','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Tapacarí','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Tiraque','departamento_id' => 4,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Azurduy','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Belisario Boeto','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Hernando Siles','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Luis Calvo','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Nor Cinti','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Samuel Oropeza','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sud Cinti','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Tomina','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Yamparáez','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Zudáñez','departamento_id' => 5,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Arce','departamento_id' => 6,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Cercado','departamento_id' => 6,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Gran Chaco','departamento_id' => 6,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'José María Avilés','departamento_id' => 6,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Méndez','departamento_id' => 6,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'O Connor','departamento_id' => 6,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Abuná','departamento_id' => 7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'General Federico Román','departamento_id' => 7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Madre de Dios','departamento_id' => 7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Manuripi','departamento_id' => 7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Nicolás Suárez','departamento_id' => 7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Cercado','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'General José Ballivián','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Iténez','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Mamoré','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Marbán','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Moxos','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Vaca Díez','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Yacuma','departamento_id' => 8,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Andrés Ibáñez','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Ángel Sandóval','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Caballero','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Chiquitos','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Cordillera','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Florida','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Germán Busch','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Guarayos','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Ichilo','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Ñuflo de Chaves','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Obispo Santistevan','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Sara','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Vallegrande','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Velasco','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        DB::table('provincias')->insert(['provincia' => 'Warnes','departamento_id' => 9,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]);
        
    }
}

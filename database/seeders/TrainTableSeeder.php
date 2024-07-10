<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
            
   for ($i = 0; $i < 50; $i++) {

       $train = new Train();

       $train->azienda = $faker->company();
       $train->stazione_di_partenza = $faker->city();
       $train->stazione_di_arrivo = $faker->city();
       $train->numero_carrozze = $faker->numberBetween(47, 110);
       $train->codice_treno = $faker->isbn13();
       $train->orario_di_partenza = $faker->dateTimeBetween('+1 week', '+3 week');
       $train->orario_di_arrivo = $faker->dateTimeBetween('+3 week', '+6 week');
       $train->in_orario = $faker->boolean();
       $train->cancellato = $faker->boolean();
       
       $train->save();
    }
    }
}

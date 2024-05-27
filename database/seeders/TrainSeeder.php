<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;



class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        // svuoto la tabella ogni volta che lancio il seeder prima di riempirlo
        DB::table('trains')->truncate();


        
    
        
        for ($i = 0; $i < 100; $i++){
            
            
            // creo l'istanza del model Train
            $new_train = new Train();

            // popolo le proprietà dell'istanza appena creata
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->data = $faker->dateTimeThisMonth('+30 days');
            $new_train->codice_treno = $faker->bothify('??####');
            $new_train->numero_di_carrozze = $faker->numberBetween(0, 20);
            $new_train->in_orario = $faker->randomElement([true, false]);
            $new_train->cancellato = $faker->randomElement([true, false]);

            $new_train->save();


        }
    }
}

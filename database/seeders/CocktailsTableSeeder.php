<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 40; $i++) {
            $cocktail = new Cocktail();

            $cocktail->nome = $faker->randomElement(['Americano', 'Negroni', 'Cuba Libre', 'Margarita', 'Cosmopolitan', 'Sex on the beach', 'Daiquiri', 'Gin Tonic', 'Japanaise', 'Mojito']);
            $cocktail->alcolico = $faker->randomElement([true, false]);
            $cocktail->ingredienti = $faker->text(50);
            $cocktail->gradazione = $faker->numberBetween(10, 30);

            $cocktail->save();
        }
    }
}

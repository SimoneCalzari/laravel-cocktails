<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktail = new Cocktail();

        $cocktail->nome = 'Negroni';
        $cocktail->alcolico = true;
        $cocktail->ingredienti = 'Rum, Gin, Cola';
        $cocktail->gradazione = 20;

        $cocktail->save();

        $cocktail = new Cocktail();

        $cocktail->nome = 'Americano';
        $cocktail->alcolico = true;
        $cocktail->ingredienti = 'Rum, Gin, Cola';
        $cocktail->gradazione = 25;

        $cocktail->save();
    }
}

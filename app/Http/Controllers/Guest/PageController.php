<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;
use Database\Seeders\CocktailsTableSeeder;

class PageController extends Controller
{
    public function index()
    {
        // RICHIAMO SEEDER QUANDO VADO ALLA WELCOME
        $seeder = new CocktailsTableSeeder();
        $seeder->run();
        $cocktails = Cocktail::all();
        return view('welcome', compact('cocktails'));
    }
}

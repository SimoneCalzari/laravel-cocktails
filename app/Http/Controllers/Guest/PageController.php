<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class PageController extends Controller
{
    public function index() {
        $cocktails = Cocktail::all();
        return view('welcome', compact('cocktails'));
    }
}


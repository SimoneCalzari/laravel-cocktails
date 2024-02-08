<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCocktailRequest;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cocktails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {

         $data= $request->validated();

        $cocktail = new Cocktail();
        $cocktail->nome = $data['nome'];
        $cocktail->ingredienti = $data['ingredienti'];
        $cocktail->alcolico = $data['alcolico'];
        $cocktail->gradazione = $data['gradazione'];
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }
        
    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        return view('cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        return view('cocktails.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( StoreCocktailRequest $request, Cocktail $cocktail)
    {
        
         $data= $request->validated();

       
        $cocktail->nome = $data['nome'];
        $cocktail->ingredienti = $data['ingredienti'];
        $cocktail->alcolico = $data['alcolico'];
        $cocktail->gradazione = $data['gradazione'];
        $cocktail->save();
        return redirect()->route('cocktails.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
      $cocktail->delete();
        return redirect()->route('cocktails.index');
    }
}

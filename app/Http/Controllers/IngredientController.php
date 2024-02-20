<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('ingredients.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientRequest $request)
    {
        $data = $request->validated();
        $ingredient = new Ingredient();
        $ingredient->name = $data['name'];
        $ingredient->save();
        return redirect()->route('ingredients.index')->with('new_record', "L'ingrediente $ingredient->nome #$ingredient->id è stato aggiunto con successo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        $cocktails = $ingredient->cocktails;
          
        return view('ingredients.show', compact('ingredient', 'cocktails'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngredientRequest $request, Ingredient $ingredient)
    {
        $data = $request->validated();
        $ingredient->name = $data['name'];
        $ingredient->save();

        return redirect()->route('ingredients.show', $ingredient)->with('update_record', "L' ingrediente $ingredient->name #$ingredient->id è stato aggiornato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->cocktails()->sync([]);
        $nome_ingredient = $ingredient->nome;
        $id_ingredient = $ingredient->id;
        $ingredient->delete();
        return redirect()->route('ingredients.index')->with('delete_record', "L'ingrediente $nome_ingredient #$id_ingredient è stato rimosso");
    }
}

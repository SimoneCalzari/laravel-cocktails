<?php

namespace App\Http\Controllers;

use App\Http\Requests\CocktailRequest;
use App\Models\Cocktail;
use App\Models\Ingredient;
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

        $ingredients =  Ingredient::all();
        return view('cocktails.create',compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CocktailRequest $request)
    {

        $data = $request->validated();

        $cocktail = new Cocktail();
        $cocktail->nome = $data['nome'];
        $cocktail->ingredienti = $data['ingredienti'];
        $cocktail->alcolico = $data['alcolico'];
        $cocktail->gradazione = $data['gradazione'];
        $cocktail->save();
        $cocktail->ingredients()->sync($data['ingredients']);
        return redirect()->route('cocktails.index')->with('new_record', "Il cocktail $cocktail->nome #$cocktail->id è stato aggiunto con successo");
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
    public function update(CocktailRequest $request, Cocktail $cocktail)
    {

        $data = $request->validated();


        $cocktail->nome = $data['nome'];
        $cocktail->ingredienti = $data['ingredienti'];
        $cocktail->alcolico = $data['alcolico'];
        $cocktail->gradazione = $data['gradazione'];
        $cocktail->save();

        return redirect()->route('cocktails.show', $cocktail)->with('update_record', "Il cocktail $cocktail->nome #$cocktail->id è stato aggiornato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $nome_cocktail = $cocktail->nome;
        $id_cocktail = $cocktail->id;
        $cocktail->delete();
        return redirect()->route('cocktails.index')->with('delete_record', "Il cocktail $nome_cocktail #$id_cocktail è stato rimosso");;
    }
}

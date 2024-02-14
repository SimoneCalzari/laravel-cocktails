@extends('layouts.app')

@section('main')
    <main class="flex-grow-1 overflow-auto">

        <div class="container py-3">
            <header class="py-3 text-danger d-flex justify-content-between align-items-center">
                <h2>Modifica un cocktail</h2>
                <a href="{{ route('cocktails.index') }}" class="btn btn-danger">Back to cocktails <i
                        class="fa-solid fa-wine-bottle"></i></a>
            </header>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('cocktails.update', $cocktail) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Cocktail</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                        name="nome" required value="{{ old('nome', $cocktail->nome) }}">
                </div>
                <label for="alcolico" class="form-label">Alcolico</label>
                <select class="form-select mb-3  @error('alcolico') is-invalid @enderror" name="alcolico">
                    <option default value="Pippo">Scegli tra le opzioni</option>
                    <option value="1" @if (old('alcolico', $cocktail->alcolico) == '1') selected @endif>Si</option>
                    <option value="0" @if (old('alcolico', $cocktail->alcolico) == '0') selected @endif>No</option>
                </select>
                <div class="mb-4">
                    <label for="gradazione" class="form-label">Gradazione</label>
                    <input type="number" class="form-control  @error('gradazione') is-invalid @enderror" id="gradazione"
                        name="gradazione" required value="{{ old('gradazione', $cocktail->gradazione) }}">
                </div>
                <div class="mb-3">
                    <h5>Ingredienti</h5>
                    @foreach ($ingredients as $ingredient)
                        @if ($errors->any())
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ingredient{{ $ingredient->id }}"
                                    value="{{ $ingredient->id }}" name="ingredients[]"
                                    {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : '' }}>
                                <label class="form-check-label"
                                    for="ingredient{{ $ingredient->id }}">{{ ucfirst($ingredient->name) }}</label>
                            </div>
                        @else
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="name"
                                    value="{{ $ingredient->id }}" name="ingredients[]"
                                    {{ $cocktail->ingredients->contains($ingredient->id) ? 'checked' : '' }}>
                                <label class="form-check-label" for="name">{{ ucfirst($ingredient->name) }}</label>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div>
                    <button type="submit" class="btn btn-outline-danger">Aggiorna <i
                            class="fa-regular fa-paper-plane"></i></button>
                </div>

            </form>
        </div>
    </main>
@endsection

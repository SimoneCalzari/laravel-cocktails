@extends('layouts.app')

@section('main')
    <main class="flex-grow-1 overflow-auto">

        <div class="container py-3">
            <header class="py-3 text-danger d-flex justify-content-between align-items-center">
                <h2>Aggiungi un cocktail</h2>
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
            <form action="{{ route('cocktails.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Cocktail</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                        name="nome" required value="{{ old('nome') }}">
                </div>
                {{-- <div class="mb-3">
                    <label for="ingredienti" class="form-label">Ingredienti</label>
                    <input type="text" class="form-control  @error('ingredienti') is-invalid @enderror" id="ingredienti"
                        name="ingredienti" required value="{{ old('ingredienti') }}">
                </div> --}}
                <label for="alcolico" class="form-label">Alcolico</label>
                <select class="form-select mb-3  @error('alcolico') is-invalid @enderror" name="alcolico">
                    <option value="Pippo">Scegli tra le opzioni</option>
                    <option value="1" @if (old('alcolico') == '1') selected @endif>Si</option>
                    <option value="0" @if (old('alcolico') == '0') selected @endif>No</option>
                </select>
                <div class="mb-4">
                    <label for="gradazione" class="form-label">Gradazione</label>
                    <input type="number" class="form-control  @error('gradazione') is-invalid @enderror" id="gradazione"
                        name="gradazione" required value="{{ old('gradazione') }}">
                </div>

                <div class="mb-3">
                    <h5>Ingredienti</h5>
                    @foreach ($ingredients as $ingredient)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="ingredient{{ $ingredient->id }}"
                                value="{{ $ingredient->id }}" name="ingredients[]"
                                {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="ingredient{{ $ingredient->id }}">{{ ucfirst($ingredient->name) }}</label>
                        </div>
                    @endforeach
                    {{-- // storage  --}}
                <div class="input-group my-4">
                    <input type="file" class="form-control" id="inputGroupFile02" name="img">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-outline-danger">Crea <i
                            class="fa-regular fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </main>
@endsection

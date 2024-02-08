@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <form action="{{ route('cocktails.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Cocktail</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="ingredienti" class="form-label">Ingredienti</label>
                    <input type="text" class="form-control" id="ingredienti" aria-describedby="emailHelp"
                        name="ingredienti">
                </div>
                <div class="mb-3">
                    <label for="gradazione" class="form-label">Gradazione</label>
                    <input type="text" class="form-control" id="gradazione" aria-describedby="emailHelp"
                        name="gradazione">
                </div>

                <label for="alcolico" class="form-label">Alcolico</label>
                <select class="form-select" aria-label="Default select example" name="alcolico" value="0">

                    <option value="1">si</option>
                    <option value="0">no</option>
                </select>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </main>
@endsection

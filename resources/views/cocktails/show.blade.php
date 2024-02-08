@extends('layouts.app')

@section('main')
    <main>
        <div class="container py-4">
            <div class="card" style="width: 50% ">
                <div class="d-flex">
                    <img src="https://picsum.photos/200" class="card-img-top container-fluid" alt="cocktail">
                    <div class="card-body">
                        <h5 class="card-title">Nome</h5>
                        <p class="card-text">{{ $cocktail->nome }}</p>
                        <h5 class="card-title">Ingredienti</h5>
                        <p class="card-text">{{ $cocktail->ingredienti }}</p>
                        <h5 class="card-title">Alcolico</h5>
                        <p class="card-text">{{ $cocktail->alcolico ? 'Si' : 'No' }}</p>
                        <h5 class="card-title">Gradazione</h5>
                        <p class="card-text">{{ $cocktail->gradazione }}°</p>
                        <a href="{{ route('cocktails.index') }}" class="btn btn-primary">Go to cocktails list</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

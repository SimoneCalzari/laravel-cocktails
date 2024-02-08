@extends('layouts.app')

@section('main')

<button  class="btn btn-primary " ><a href="{{route('cocktails.index')}}" class="text-white">Lista Cocktails</a></button>
    <main>
        <div class="container">
            <section class="row gy-4 py-5">
                @foreach ($cocktails as $cocktail)
                    <div class="col-3 d-flex">
                        <div class="card w-100 bg-danger">
                            <img src="https://picsum.photos/200" class="img-fluid">
                            <div class="card-body text-white">
                                <h4 class="card-title mb-2">{{ $cocktail['nome'] }}</h5>
                                    <p class="card-text mb-1">
                                        <span class="fw-bold">Alcolico:</span> {{ $cocktail['alcolico'] ? 'Si' : 'No' }}
                                    </p>
                                    <p class="card-text mb-1">
                                        <span class="fw-bold">Ingredienti:</span> {{ $cocktail['ingredienti'] }}
                                    </p>
                                    <p class="card-text">
                                        <span class="fw-bold">Gradazione:</span>
                                        {{ $cocktail['alcolico'] ? $cocktail['gradazione'] . '°' : '/' }}
                                    </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </section>
        </div>
    </main>
@endsection

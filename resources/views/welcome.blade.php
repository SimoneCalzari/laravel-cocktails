@extends('layouts.app')

@section('main')
    <main class="overflow-auto flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container text-center ">
            <header class="py-3 text-danger">
                <h2>Benvenuti al bar di Andrea, Simone, Matteo, Filippo e Alessandro</h2>
            </header>
            <a href="{{ route('cocktails.index') }}" class="btn btn-danger py-3 px-3 fs-4">Lista
                Cocktails <i class="fa-solid fa-martini-glass-citrus ms-1"></i></a>
            {{-- <section class="row gy-4 py-5">
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

            </section> --}}
        </div>
    </main>
@endsection

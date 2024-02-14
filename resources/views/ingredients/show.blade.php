@extends('layouts.app')

@section('main')
    <main class="flex-grow-1 overflow-auto">
        <div class="container py-5 row g-3 ">
            @if (session('update_record'))
                <div class="alert alert-success w-75 mx-auto" role="alert">
                    {{ session('update_record') }}
                </div>
            @endif
            @foreach ($ingredient->cocktails as $cocktail)
            <div class="col-4  ">

           
            <div class="border border-danger rounded mx-auto d-flex  overflow-hidden m-2  ">
               
                <div class="w-50 p-4">
                    <h5 class="card-title">Nome</h5>
                    <p class="card-text">{{$cocktail->nome }}</p>
                    {{-- <h5 class="card-title">Ingredienti</h5> --}}
                    {{-- <p class="card-text">{{ $cocktail->ingredienti }}</p> --}}
                    <h5 class="card-title">Ingredienti</h5>
                    <ul>
                        @foreach ($cocktail->ingredients as $ingredient)
                            <li>
                                {{ $ingredient->name }}
                            </li>
                        @endforeach
                    </ul>
                    <h5 class="card-title">Alcolico</h5>
                    <p class="card-text">{{ $cocktail->alcolico ? 'Si' : 'No' }}</p>
                    <h5 class="card-title">Gradazione</h5>
                    <p class="card-text">
                        {!! $cocktail->alcolico ? "$cocktail->gradazione °" : '<i class="fa-solid fa-ban"></i>' !!}</p>
                    <a href="{{ route('cocktails.index') }}" class="btn btn-danger">Back to cocktails <i
                            class="fa-solid fa-wine-bottle"></i></a>
                </div>
            </div>
             </div>
                 @endforeach
        </div>
        
    </main>
@endsection

@extends('layouts.app')

@section('main')
    <main class="flex-grow-1 overflow-auto">
        <div class="container py-5 g-3 ">
            @if (session('update_record'))
                <div class="alert alert-success w-75 mx-auto" role="alert">
                    {{ session('update_record') }}
                </div>
            @endif
            <div class="border border-danger rounded mx-auto d-flex w-50  overflow-hidden m-2  ">
                <div class="w-50 p-4 flex-grow-1">
                    <h3 class="text-center">#{{ $ingredient->id }} - {{ ucfirst($ingredient->name) }}</h3>
                    <h5 class="card-title mb-2">Cocktails con questo ingrediente</h5>
                    @if ($ingredient->cocktails->count())
                        <ul>
                            @foreach ($ingredient->cocktails as $cocktail)
                                <li>
                                    <a href="{{ route('cocktails.show', $cocktail) }}">{{ ucfirst($cocktail->nome) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nessun cocktails ancora con questo ingrediente</p>
                    @endif
                    <a href="{{ route('ingredients.index') }}" class="btn btn-danger">Back to Ingredients <i
                            class="fa-solid fa-backward"></i></a>
                </div>
            </div>
        </div>
        </div>

    </main>
@endsection

@extends('layouts.app')

@section('main')
    <main class="flex-grow-1 overflow-auto">

        <div class="container py-3">
            <header class="py-3 text-danger d-flex justify-content-between align-items-center">
                <h2>Modifica #{{ $ingredient->id }} - {{ $ingredient->name }} </h2>
                <a href="{{ route('ingredients.index') }}" class="btn btn-danger">Back to Ingredients <i
                        class="fa-solid fa-backward"></i></a>
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
            <form action="{{ route('ingredients.update', $ingredient) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Ingrediente</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" required value="{{ old('name', $ingredient->name) }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-danger">Modifica <i
                            class="fa-regular fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </main>
@endsection

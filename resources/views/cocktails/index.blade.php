@extends('layouts.app')

@section('main')
    <header class="text-center">
        <a href="{{ route('cocktails.create') }}">Crea</a>
    </header>
    <main>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Alcolico</th>
                    <th scope="col"></th>
                    {{-- <th scope="col">Op</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($cocktails as $cocktail)
                    <tr>
                        <th scope="row">{{ $cocktail->id }}</th>
                        <td>{{ $cocktail->nome }}</td>
                        <td>{{ $cocktail->alcolico ? 'Si' : 'No' }}</td>
                        <td><a href="{{ route('cocktails.show', $cocktail) }}">Dettagli</a></td>
                        <td><a href="{{ route('cocktails.edit', $cocktail) }}">Modifica</a></td>
                        {{-- <td>@mdo</td> --}}
                    </tr>
                @endforeach


            </tbody>
        </table>
    </main>
@endsection

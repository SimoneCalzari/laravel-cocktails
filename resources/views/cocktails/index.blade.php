@extends('layouts.app')

@section('main')
    <main class="overflow-auto flex-grow-1 pb-3">

        <div class="container">
            <header class="w-75 mx-auto d-flex justify-content-between align-items-center fw-bold">
                <a class="btn btn-outline-danger fs-5" href="{{ route('welcome') }}">Home <i
                        class="fa-solid fa-house ms-1 fs-6"></i></a>
                <h2 class="text-danger fs-1 py-3">Lista cocktails</h2>
                <a class="btn btn-outline-danger fs-5" href="{{ route('cocktails.create') }}">Crea <i
                        class="fa-solid fa-plus ms-1 fs-6"></i></a>
            </header>
            <table class="table table-bordered border-primary w-75 mx-auto text-center align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Alcolico</th>
                        <th>Creazione Record</th>
                        <th>Azioni sul cocktail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cocktails as $cocktail)
                        <tr>
                            <td>{{ $cocktail->id }}</td>
                            <td>{{ $cocktail->nome }}</td>
                            <td>{{ $cocktail->alcolico ? 'Si' : 'No' }}</td>
                            <td>{{ $cocktail->created_at }}</td>
                            <td>
                                <a href="{{ route('cocktails.show', $cocktail) }}" class="btn btn-info btn-sm">Dettagli <i
                                        class="fa-solid fa-circle-info ms-1"></i></a>
                                <a href="{{ route('cocktails.edit', $cocktail) }}"
                                    class="btn btn-success btn-sm mx-2">Modifica <i
                                        class="fa-solid fa-pen-to-square ms-1"></i></a>

                                <form action="{{ route('cocktails.destroy', $cocktail) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Elimina <i
                                            class="fa-solid fa-trash-can ms-1"></i></button>
                                </form>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </main>
@endsection

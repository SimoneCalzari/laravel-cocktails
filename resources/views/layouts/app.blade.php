<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Cocktail List</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container my-5 text-center">
            <h1>Laravel Cocktail List</h1>
        </div>
    </header>


    <main>
        <ul class="d-flex flex-wrap gap-5">
            @foreach ($cocktails as $cocktail)
                <li class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nome: {{ $cocktail['nome'] }}</h5>
                        <p class="card-text">Alcolico: {{ $cocktail['alcolico'] ? 'Si' : 'No' }}</p>
                        <p class="card-text">Ingredienti: {{ $cocktail['ingredienti'] }}</p>
                        <p class="card-text">Gradazione: {{ $cocktail['gradazione'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>


</body>

</html>

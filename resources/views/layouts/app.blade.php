<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    @vite('resources/js/app.js')
</head>

<body>
    <ul>
        @foreach ($cocktails as $cocktail)
            <li>Nome: {{ $cocktail['nome'] }}
            </li>
            <li>Alcolico: {{ $cocktail['alcolico'] ? 'Si' : 'No' }}
            </li>
            <li>Ingredienti: {{ $cocktail['ingredienti'] }}
            </li>
            <li>Gradazione: {{ $cocktail['gradazione'] }}
            </li>
        @endforeach
    </ul>
</body>

</html>

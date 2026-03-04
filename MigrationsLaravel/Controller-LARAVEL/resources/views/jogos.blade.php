<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testando Controllers - Nome do jogador: {{ $nome }}</h1> 
    <p>Nome do jogador: {{ $nome }}</p>
    <p>Jogo Favorito: {{ $jogoFav }} </p>
    <p>Id do jogo: {{ $id }}</p>
    <a href="{{ route('home-index') }}">Clique aqui</a>
</body>
</html>
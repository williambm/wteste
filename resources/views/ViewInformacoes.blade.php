<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
</head>
<body>
    <h1>Informações</h1>

    <p>Olá <b> {{ $usuario }} </b> </p>

    <ul>
        @foreach($produtos as $produto)
        <li> {{ $produto }} </li>
        @endforeach
    </ul>
</body>
</html>
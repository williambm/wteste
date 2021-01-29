<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos: Listagem</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    <ul>
        @foreach($produtos as $produto)
            <li> {{ $produto }} </li>
        @endforeach
    </ul>
</body>
</html>
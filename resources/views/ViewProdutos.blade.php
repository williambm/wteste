<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <!-- Usando ForEach do Blade Laravel -->
    <ul>
        @foreach($produtos as $produto)
        <li> {{ $produto }} </li>
        @endforeach
    </ul>
</body>
</html>
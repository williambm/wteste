<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Preencha o seu nome: </h1>

    <form method=post action="formularioReceber">
        @csrf
        <input type="text" name="nomeUsuario">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
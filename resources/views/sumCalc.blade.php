<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum</title>
</head>
<body>
    <h1>Somar</h1>
    <form action = '/calc/sum' method = "post">
        @csrf
        <input name = "n1" placeholder = "Número 1">
        <input name = "n2" placeholder = "Número 2">
        <button type = "submit">Calcular</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soma</title>
</head>
<body>
    <h1>Somar</h1>
    <form action="/calc/sum" method="POST">
        @csrf
        <input name="n1">
        <input name="n2">
        <button type="submit">Calcular</button>
        </form> 
</body>
</html>
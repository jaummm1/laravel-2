<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form action="/calcular" method="POST">
        @csrf
        <input name="num1" type="number">
        <input name="operador" type="text">    
        <input name="num2" type="number">
        <button type="submit">Calcular</button>  
     </form> 
</body>
</html>
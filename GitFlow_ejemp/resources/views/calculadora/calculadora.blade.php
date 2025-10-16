<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
   
    @if($opcion == 'division')
        <h1>División</h1>
        @if($num1 == 0 || $num2 == 0 )
            <h2>No se puede dividir entre 0</h2>
        @else
            <h2>La division de {{$num1}} y {{$num2}}  es: {{$num1 / $num2}} </h2>
        @endif
         
    @endif


</body>
</html>
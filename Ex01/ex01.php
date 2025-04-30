<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01</title>
</head>
<body>
    <?php

    $valorA = $_GET["valorA"];
    $valorB = $_GET["valorB"];
    $valorC = $_GET["valorC"];
    $valorD = $_GET["valorD"];

    $somaAC = $valorA + $valorC;
    echo "A Soma de A e C: {$somaAC} <br>";

    $somaBD = $valorB + $valorD;
    echo "A Soma de B e D: {$somaBD} <br>";
    

    $multiplicacao = $valorB * $valorD;
    echo "A Multiplicação de B e D: {$multiplicacao} <br>";
    

    if($somaAC > $multiplicacao){
        echo "A+D é maior que B*D: {$somaAC} <br>";
    }
    else if ($somaAC < $multiplicacao){
        echo "A+D é menor que B*D: {$multiplicacao} <br>";
    }
    else {
        echo "A+D é igual a B*D: {$somaAC}, {$multiplicacao} <br>";
    }
    


if ($somaAC > $somaBD){
   echo "A+C é maior que B+D {$somaAC} <br>";
}

else if ($somaAC < $somaBD){
     echo "A+C é menor que B+D {$somaAC} <br>";
 }

 else {

 echo "A+C é igual a B+D {$somaAC}, {$somaBD}";
 }






    ?>
    
</body>
</html>
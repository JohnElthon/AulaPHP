<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2 imprimir numeros pares</title>
</head>
<body>

<?php

for ($i = 1000; $i <= 2000; $i++){
    if ($i % 2 == 0){
         echo "<br> $i";
    }
}
?>
    
</body>
</html>
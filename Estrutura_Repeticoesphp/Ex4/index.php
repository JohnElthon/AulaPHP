<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>
<?php

$i=0;
$numero = $_GET["numero"];
$multiplicacao;

while ($i <= 10){
    $multiplicacao = $numero * $i;
    echo "Resultado <br>$numero x $i = $multiplicacao <br>";
    $i++;
}


?>
</body>
</html>
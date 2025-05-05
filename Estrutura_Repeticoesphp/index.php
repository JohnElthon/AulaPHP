<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Numero Primos</title>
</head>
<body>
<?php



for ($numero = 2; $numero <= 100; $numero++) {
    $Primo = true;

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $Primo = false;
            break;
        }
    }

    if ($Primo) {
        echo $numero . "<br/>";
    }
}



   


   

?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel url</title>
</head>
<body>
    <?php
    /*$n1 = $_GET["a"];
    $n2 = $_GET["p"];

    $soma = $n1 + $n2;

    echo "A Soma das Variáveis é {$soma}";*/

    $n1 = $_GET["p"];
    $n2 = $_GET["a"];
    $casas_decimais = 2;

    $soma = sprintf("%.{$casas_decimais}f", $n1/($n2 * $n2));

    echo "Sua Altura é: {$n1} - seu peso é: {$n2} - Seu IMC é: {$soma}"

    ?>
</body>
</html>
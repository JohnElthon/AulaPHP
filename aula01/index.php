<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    $a = 'Meu primeiro arquivo com php';
 
    $nome = 'John';
    $idade = '32';
    $salario = '800';
    $fichacompleta = $nome."-".$idade."-".$salario;
    echo $fichacompleta;
 
    echo "<br>";
    $nome = 'Marcos';
    $idade = '33';
    $salario = 'xxxx';
    $fichacompleta= "$nome - ";
    $fichacompleta .= "$idade - ";
    $fichacompleta .= "$salario";
    echo $fichacompleta;

    echo "<br>";
    $nome = 'John';
    $idade = '32';
    $salario = '800';
    echo "meu nome: {$nome} - minha idade: {$idade} - meu salário: {$salario}"
 
     ?>
</body>
</html>
 
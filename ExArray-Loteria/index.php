<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Array</title>
</head>
<body>
    <?php
    $i=0; 
    $numeros = [];
  
    while (count($numeros) <= 5){

        $num = rand(1,60);

        if (in_array($num, $numeros) == ''){

            $numeros[] = $num;
        }
    }

        // foreach ($numeros as $valor){
        //      echo "$valor,/n"
        //  }
        
         while ($i <= 5){
            echo $numeros[$i], ",";
            $i++;
         }
       
         
    ?>
    
</body>
</html>
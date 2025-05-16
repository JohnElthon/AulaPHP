<?php
require_once "validador_acesso.php";

//declarando variável
$chamados = [];

//abrindo arquivo para consultar dados   ('r' = reader lê os arquivos)
$arquivo = fopen('..\app_help_desk\Registro.txt','r');

//foof = enquanto não for o final do arquivo ele entra
while(!feof($arquivo)){

//fgets pega a linha e guarda no registro
$registros = fgets($arquivo);

//Pega o registro e guarda num array, onde conterá todos os chamados
$chamados[] = $registros;
}

//Fechando o arquivo. 
fclose($arquivo);
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <!-- Rodamos um foreach passando por todos os chamados -->
             
        

            <?php foreach($chamados as $chamado) {  ?>

                 <!-- Usamos o explode para separar os valores de cada chamado em um novo array   -->
               <?php $chamado_dados = explode('|', $chamado);

                 //Para validar que só será exibido um novo card se possuir todos os valores preenchidos
                  if(count($chamado_dados) < 6){
                    continue; }

                     //Valida primeiro se o perfil é de usuário, depois se o usuário for diferente passa pro próximo
                if($_SESSION['perfil'] === 'user'){
                  if($chamado_dados[0] != $_SESSION['id'] ){
                    continue; }

            }
          
            ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamado_dados[3] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[4] ?></h6>
                  <p class="card-text"><?php echo $chamado_dados[5] ?></p>

                </div>
              </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php">
                 <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                  </a>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
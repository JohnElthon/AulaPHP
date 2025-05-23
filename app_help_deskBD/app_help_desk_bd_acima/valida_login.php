<!DOCTYPE html>
<html lang="enpt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida Login</title>
</head>
<body>
    <?php
    session_start();

    //Usuários pré-cadastrados
$usuarios = array(
    ['id' => '1',
    'perfil' => 'adm',
    'nome' => 'John',
    'email' => 'johncosta@gmail.com',
    'senha' => '123'],

    ['id' => '2',
    'perfil' => 'user',
    'nome' => 'Debora',
    'email' => 'deboracosta@gmail.com',
    'senha' => '123456'],

    ['id' => '3',
    'perfil' => 'user',
    'nome' => 'Yan',
    'email' => 'yancosta@gmail.com',
    'senha' => '0'],
);

$usuarioAutenticado = false;
//recebendo os dados via metodo GET
 $usuarioEmail = $_GET['email'];
 $usuarioSenha = $_GET['senha'];

 //Autenticando o Usuário
 for ($idx = 0; $idx < count($usuarios); $idx++) {
    if ($usuarioEmail == $usuarios[$idx]['email'] && $usuarioSenha == $usuarios[$idx]['senha']){
        $usuarioAutenticado = true;
        $_SESSION['id'] = $usuarios[$idx]['id'];
        $_SESSION['perfil'] = $usuarios[$idx]['perfil'];
        $_SESSION['nome'] = $usuarios[$idx]['nome'];
        break;
    } else {
        $usuarioAutenticado = false;
    }
 }

 if($usuarioAutenticado){
    //Validando a Sessão
    $_SESSION['autenticado'] = 'sim';
    header('location:home.php');
 }else{
    $_SESSION['autenticado'] = 'nao';
    header('location:index.php?login=erro');
 }
    ?>
    
</body>
</html>
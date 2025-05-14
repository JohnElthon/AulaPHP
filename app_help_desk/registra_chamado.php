<?php
require_once "validador_acesso.php";

//Organizando os dados, retirando | dos possiveis valores
$id = str_replace('|','-',$_SESSION['id']);
$perfil = str_replace('|','-',$_SESSION['perfil']);
$nome = str_replace('|','-',$_SESSION['nome']);
$titulo = str_replace('|','-',$_POST['titulo']);
$categoria = str_replace('|','-',$_POST['categoria']);
$descricao = str_replace('|','-',$_POST['descricao']);

//concatenando os valores decada parâmetro, separado por |
$dados = $id . '|' . $perfil . '|' . $nome . '|' . $titulo . '|' . $categoria . '|' . $descricao . PHP_EOL;

//var_dump($dados);

//Abrindo o arquivo e armazenando em uma variavel
$arquivo = fopen('..\app_help_desk\Registro.txt','a');

//Escrevendo no arquivo
fwrite($arquivo, $dados);

//Fechando o arquivo
fclose($arquivo);

// Redirecionando para a página de abertura de chamado
header('location: abrir_chamado.php?cadastro=sucesso');
 
?>